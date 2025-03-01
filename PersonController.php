<?php

namespace Src\Controller;

use Src\TableGateways\PersonGateway;

class PersonController {
  private $db;
  private $requestMethod;
  private $userId;
  private $personGateway;
  public function __construct($db, $requestMethod, $userId) {
    $this->db            = $db;
    $this->requestMethod = $requestMethod;
    $this->userId        = $userId;

    $this->personGateway = new PersonGateway($this->db);
  }

  public function processRequest() {
    switch ($this->requestMethod) {
      case 'GET':
        if ($this->userId) {
          $response = $this->getUser($this->userId);
        } else {
          $response = $this->getAllUsers();
        }
        break;

      case 'POST':
        $response = $this->createUserFromRequest();
        break;
      case 'PUT':
        $response = $this->updateUserFromRequest($this->userId);
        break;
      case 'DELETE':
        $response = $this->deleteUser($this->userId);
        break;
      default:
        $response = $this->notFoundResponse();
        break;
    }

    header($response['status_code_header']);
    if ($response['body']) {
      echo $response['body'];
    }
  }

  private function getUser($id): mixed {
    $result = $this->personGateway->find($id);
    if (!$result) {
      return $this->notFoundResponse();
    }
    $response['status_code_header'] = 'HTTP/1.1 200 OK';
    $response['body']               = json_encode($result);
    return $response;
  }

  private function getAllUsers(): mixed {
    $result = $this->personGateway->findAll();
    $response['status_code_header'] = 'HTTP/1.1 200 OK';
    $response['body']                 = json_encode($result);
    return $response;
  }

  private function createUserFromRequest(): mixed {
    $input = (array) json_decode(file_get_contents('php://input'), TRUE);
    if (!$this->validatePerson($input)) {
      return $this->unprocessableEntityResponse();
    }
    $this->personGateway->insert($input);
    $response['status_code_header'] = 'HTTP/1.1 201 Created';
    $response['body']               = null;
    return $response;
  }

  private function updateUserFromRequest($id): mixed {
    $result = $this->personGateway->find($id);
    if (!$result) {
      return $this->notFoundResponse();
    }
    $input = (array) json_decode(file_get_contents('php://input'), TRUE);
    if (! $this->validatePerson($input)) {
      return $this->unprocessableEntityResponse();
    }
    $this->personGateway->update($id, $input);
    $response['status_code_header'] = 'HTTP/1.1 200 OK';
    $response['body']               = null;
    return $response;
  }

  private function deleteUser($id): mixed {
    $result = $this->personGateway->find($id);
    if (! $result) {
      $this->notFoundResponse();
    }
    $this->personGateway->delete($id);
    $response['status_code_header'] = 'HTTP/1.1 200 OK';
    $response['body']                = null;
    return $response;
  }

  private function validatePerson(array $input): bool {
    if (!isset($input['firstname'])) {
      return false;
    }

    if (! isset($input['lastname'])) {
      return false;
    }
    return true;
  }

  private function unprocessableEntityResponse(): array {
    $response['status_code_header'] = 'HTTP/1.1 402 Unprocessable Entity';
    $response['body']               = json_encode([
      'error' => 'Invalid Input',
    ]);

    return $response;
  }

  private function notFoundResponse(): array {
    $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
    $response['body']                 = null;
    return $response;
  }
}
