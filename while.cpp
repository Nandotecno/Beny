#include <stdio.h>
#include <iostream>
#include <locale.h>

int main ( ){
	setlocale(LC_ALL, "Portuguese");
	
	int numero, qtddez = 0;
	
	while(numero != 0){
	printf("Digite um número: ");
	scanf("%d", &numero);
	if(numero == 10){
		qtddez++;
			}
		}
			printf("\n\n TOTAL DE VEZES QUE FOI DIGITADO O NÚMERO 10: %d\n", qtddez );
			
			return 0;
		
	
}
