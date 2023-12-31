<?php

class Misc
{
    public static function isValidCredCard($string) {
        // Strip any non-digits (useful for credit card numbers with spaces and hyphens)
        $string=preg_replace('/\D/', '', $string);
      
        // Set the string length and parity
        $number_length=strlen($string);
        $parity=$number_length % 2;
      
        // Loop through each digit and do the maths
        $total=0;
        for ($i=0; $i<$number_length; $i++) {
          $digit=$string[$i];
          // Multiply alternate digits by two
          if ($i % 2 == $parity) {
            $digit*=2;
            // If the sum is two digits, add them together (in effect)
            if ($digit > 9) {
              $digit-=9;
            }
          }
          // Total up the digits
          $total+=$digit;
        }

        // If the total mod 10 equals 0, the number is valid
        return ($total % 10 == 0) ? TRUE : FALSE;
    }

    //Retorna o numero completando o tamanho com uma determinada qtde de zeros a esquerda
    public static function strzero($valor, $zeros){
	    $zeros = $zeros - strlen("$valor");	
	    $var = '0';
	    for($I=1; $I < $zeros; $I++){
		    $var = $var.'0';
	    }//fim for
	    return("$var$valor");
    }

}
