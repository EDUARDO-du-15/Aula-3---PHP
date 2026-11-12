<?php

$maior = readline("Insira o maior número: ");
$menor = readline("Insira o menor número: ");

while($maior < $menor or !is_numeric($maior) or !is_numeric($menor)){
    $maior = readline("\nIntervalo inválido: insira novamente o maior número: ");
    $menor = readline("\nIntervalo inválido: insira novamente o menor número: ");
    if(!is_numeric($maior) or !is_numeric($menor)){
        print("\nErro, um dos valores não era inteiro, os dois valores devem ser inteiros.");
    }
}

$maior = (int) $maior;
$menor = (int) $menor;
$num_aleatorio = rand($menor, $maior);
$contador = 0;

while(true){
    if($contador >= 50){
        print("O número máximo de tentativas foi excedido, reinicie o programa para tentar novamente.");
        die();
    }
    $chute = (int) readline("\nChute (tentativa " . ($contador + 1) . " de 50): ");
    $contador++;
    if($chute != $num_aleatorio){
        print("\nErrou\n");
        if($chute > $num_aleatorio){
            print("O chute é alto.\n");
        }else{
            print("O chute é baixo.\n");
        }
    }else{
        break;
    }
}
print("\nAcertou, tentativas: $contador\n");
