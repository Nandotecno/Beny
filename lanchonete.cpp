#include <stdio.h>
#include <iostream>
#include <locale.h>

int main(void){
	
	setlocale(LC_ALL,"Portuguese");
	
    int opcao, qtd;
    float valorDaCompra, dinheiro;

    printf("MENU LANCHONETE\n");
    printf("1 - Pastel (R$4,50)\n");
    printf("2 - Coxinha (R$4,00)\n");
    printf("3 - Hamburguer (R$12,00)\n");
    printf("Digite o código do produto desejado?");
    scanf("%d", &opcao);

    // 1 - 2 -3
    if(opcao >= 1 && opcao <=3){
        printf("Quantos deseja?");
        scanf("%d", &qtd);

        switch(opcao){
            case 1: // Pastel
                valorDaCompra = qtd * 4.5;
                break;
            case 2: // Coxinha
                valorDaCompra = qtd * 4;
                break;
            case 3: // Hamburguer
                valorDaCompra = qtd * 12;
                break;
        }

        printf("Valor total da compra: %.2f\n", valorDaCompra);
        printf("Valor entregue pelo cliente?");
        scanf("%f", &dinheiro);

        if(dinheiro >= valorDaCompra){
            printf("Dinheiro suficiente para a compra\n");
            printf("Seu troco: %.2f\n", (dinheiro - valorDaCompra));
        }else{
            printf("Dinheiro insuficiente para realizar a compra");
        }
    }else{
        printf("Codigo invalido\n");
    }
    return 0;
}
