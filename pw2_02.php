<?php
    $nome = "Armandino"; //variável local no script

    //função abaixo

    function exibir(){
        $nome = "Josefina"; //variável local na função

        echo "Valor da variável dentro da função ".$nome;
    }
 
    exibir(); //chamando a função

    echo "<br/> Valor da variável fora da função ".$nome;

    #Próxima Aula
    
    $ano = 2024; //variável local no script

    function exibir_ano($parametro){ //variável como parametro

        $parametro = $parametro + 4;
        return $parametro;

    }
    
    echo "Estamo em ".$ano." e daqui a 4 anos estaremos em ".exibir_ano($ano);

    #Próxima Aula 2

    $ano_global = 2020;

    function exibir_ano_global(){
        GLOBAL $ano_global; //definição da variável global
        $ano_global++;
        return $ano_global;
    }

    echo "<br/> Ano:".$ano_global;
    echo "<br/> Ano:".exibir_ano_global();
    echo "<br/> Ano:".exibir_ano_global();
    echo "<br/> Ano:".$ano_global;

    #Próxima Aula 3

    function exibir_VarStatic(){
        STATIC $ano; //definir variável estática
        $ano++;
        echo "<br/>".$ano;
    }

    exibir_VarStatic();
    exibir_VarStatic();
    exibir_VarStatic();

    #Próxima Aula 4
    
    //utilizando variáveis globais pré-definidas que podem ser utilizadas em todos os escopos e sem necessidade da sintaxe de call

    echo "<br/> Olá seja Bem Vindo ".$_SERVER['REMOTE_ADDR']."<br/>";
    echo "Você está utilizando o navegador: ".$_SERVER['HTTP_USER_AGENT'];

    #Próxima Aula 5

    //utilizando constantes

    define("PI", 3.14);
    define("DISC", "Matemática");

    echo "<br/> Valor de PI: ".PI;
    echo "<br/> Disciplina: ".DISC;

    #Próxima Aula 6

    //caracteres de escape
    /* 
        começam com "\" e são colocados dentro de strings
        \n = nova linha
        \r = coloca o cursor no começo da linha
        \t = pula p/ próx. tabulação
        \\ = substitui por uma "/"
        \$ = substitui por um "$"
        \" = substitui por aspas
    */

    #Próximo PDF

    
    
?> 