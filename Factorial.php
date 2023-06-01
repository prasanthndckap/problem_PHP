<?php

// Factorial is print the  it will multiply the given input value with input values -1 the then
// multipied value will multiply with inputValue -1 it will execute ultill the input value reach 1
 $inputNumber = readline("Enter the Number : ");

 $secondValue = $inputNumber;
 // if the Inputvalue is greter then 1 it will remove the input value one by one Untill it reach one
 while($inputNumber>1){
     $inputNumber--;

     $secondValue =  $secondValue * $inputNumber;
     echo $inputNumber. " * ".  $secondValue . " = ". $secondValue. "\n";
 }
