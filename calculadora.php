<?php

    # Calculadora PHP

    //printando para o usuário
    echo "Insira dois números";

    $valor1 = 23; //input do usuário
    $valor2 = 27; //input do usuário

    echo "<br><br>Você inseriu no valor1: " . $valor1;   //printando a escolha feita
    echo "<br>Você inseriu no valor2: " . $valor2;      //printando a escolha feita

    //printando opções para o usuário
    echo "<br><br>Escolha uma opção<br><br> 1-Adição<br>2-Subtração<br>3-Multiplicação<br>4-Divisão<br><br>";

    //criando variável e printando ao usuário sua escolha
    $opc = 3; //input do usuário

    echo "Você escolher a opção: ".$opc; //print de confirmação

    //criando funções

    function soma($valor1,$valor2){    //função soma
        return ($valor1+$valor2);
    }
    function sub($valor1,$valor2){     //função subtração
        return ($valor1-$valor2);
    }
    function mult($valor1,$valor2){    //função multiplicação
        return ($valor1*$valor2);
    }
    function div($valor1,$valor2){     //função divisão
        return ($valor1/$valor2);
    }

    //criando sistema condicional
    switch ($opc) {
        case 1:
            echo "<br>O resultado é: ".soma($valor1,$valor2);
            break;

        case 2:
            echo "<br>O resultado é: ".sub($valor1,$valor2);
            break;

        case 3:
            echo "<br>O resultado é: ".mult($valor1,$valor2);
            break;

        case 4:
            echo "<br>O resultado é: ".div($valor1,$valor2);
            break;
        
        default:
            echo "<br>Opção inválida";
            break;
    }

 ?>