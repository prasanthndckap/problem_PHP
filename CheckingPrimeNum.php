<?php

//$input = readline("enter the value :");

function checkPrime($input)
{
     if (is_int($input)) {

        for ($i = 2; $i < $input; $i++) {
            if ($input % $i == 0) {
//    $checkPrime = false;
                return false;
            }

            
        }
        return true;

    }
}
//echo checkPrime();

$checkValue = checkPrime(99);
if ($checkValue) {
    echo "It is a Prime Number";
} else {
    echo "It is not a prime number";
}
