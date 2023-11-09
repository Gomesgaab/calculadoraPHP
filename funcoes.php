<?php
    function somar($num1, $num2){
        $soma = $num1 + $num2;
        return "A soma de $num1 e $num2 e: $soma";
    }// fim do método somar

    function subtrair($num1, $num2){
        $sub = $num1 - $num2;
        return "A subtração de $num1 e $num2 e: $sub";
    }// fim do método Subtrsação

    function divisao($num1, $num2){

        if($num2 != 0){
            $div  = $num1 / $num2;
        }else{
            $div = "Impossível dividir por ZERO!!!";
        }//fim operação
        return "A divisão de $num1 e $num2 e: $div";

    }// fim do método DIvisão

    function multiplicar($num1, $num2){
        $mult = $num1 * $num2;
        return "A multiplicação de $num1 e $num2 e: $mult";
    }// fim do método multiplicação                
    function raiz($num1, $num2){
        $raiz = sqrt($num1);
        $raiz = sqrt($num2);
        return "A raiz quadrade de $num1 e $num2: $raiz";
    }// fim do método multiplicação    
    function potencia($num1, $num2){
        $pot = pow($num1, $num2);
        return "A potencia de $num1 e: $pot"; 
    }// fim do método potencia  
    
    function tabuada($num1){
        $msg = "";
        for ($i = 0; $i <= 10; $i++) {
            $msg .= "\n$i * $num1 =" .($i * $num1);
        }
        return $msg;
    }// fim do método tabuada
    function tabuadaN2($num2){
        $msg = "";
        for ($i = 0; $i <= 10; $i++) {
            $msg .= "\n$i * $num2 =" .($i * $num2);
        }
        return $msg;
    }// fim do método tabuada
   
?>