<?php
//readline will help to entering the word in terminal
$input = readline("Enter the word: ");
//setting a empty string for storing reversing word
$reverse = "";
for($i=strlen($input)-1;$i>=0;$i--){
//    asigning the inputs spilted words to reverse
//    .= will help add all splited values into the reverse array
    $reverse .= $input[$i];
}
//if input values and the reverse value will match it will print it is a palidrome
// if not it will print it is not a palindrome
if($reverse == $input){
    echo $input." it's is a Palindrome.\n";
}
else{
    echo $input." is not a Palindrome.\n";
}