#include <stdio.h>
#include <locale.h>

int n1=20, n2=20,soma,sub,multi;

float divisao;

main(void){

setlocale(LC_ALL,"Portugueses");

soma=n1+n2;

sub=n1-n2;

multi=n1*n2;

divisao=n1/n2;

printf("O resultado da soma é: %i \n",soma);

printf("O resultado da subtração é: %i \n",sub);

printf("O resultado da multiplicação é: %i \n",multi);

printf("O resultado da divisão é: %f \n",divisao);


}
