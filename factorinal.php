<?php


 $inputNumber = readline("Enter the Numner : ");

 $secondValue = $inputNumber;
 while($inputNumber>2){
     $inputNumber--;
     $secondValue =  $secondValue * $inputNumber;
     echo $secondValue."\n";
 }

