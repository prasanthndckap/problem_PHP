<?php


$InputNumbers = readline("Enter the Numbers here! : " );


 // strlen($InputNumbers) will get the count the lenth of inputvalue
// reverse loop will execute the decrecing the value one by one

echo "Your  input was reversed : ";
for($i=strlen($InputNumbers)-1;$i>=0;$i--){

     echo($InputNumbers[$i]);

}


