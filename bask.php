<?php
 function bhaskara ($num1, $num2, $num3){
    $bask = pow($num2,2) - (4 * $num1 * $num3);

    if ($bask < 0) {
        return "número negativo";
    }
    $x1 =  (-($num2) + sqrt($bask)) / (2 * $num1);
    $x2 = (-($num2) - sqrt($bask)) / (2 * $num1);

    return "Delta = $bask"."\n".
            "X1 = $x1"."\n".
           "X1 = $x2";        
}// fim do método bhaskara 
?>