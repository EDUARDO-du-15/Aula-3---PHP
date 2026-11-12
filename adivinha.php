<?php

$maior = readline("Insira o maior número: ");
$menor = readline("Insira o menor número: ");
$num_aleatorio = rand($menor, $maior);
$acertou = false;
$contador = 0;

do{
    $chute = (int) readline("\nChute (tentativa " . ($contador + 1) . " de 50): ");
    $contador++;
    if($chute == $num_aleatorio){
        print("\nAcertou, tentativas: $contador\n");
        $acertou = true;
    }else{
        print("\nErrou\n");
        if($contador >= 50){
            print("O número máximo de tentativas foi excedido");
            break;
        }elseif($chute > $num_aleatorio){
            print("O chute é alto.\n");
        }else{
            print("O chute é baixo.\n");
        }
    }
}while(!$acertou);
