<?php
function FindLeapYear($year){

    if($year %400 == 0)
    {
        echo "$year is a LeapYear"."\n";
    }
    else if($year %100 ==0 )
    {
        echo "$year is a LeapYear"."\n";
    }
    else if($year % 4 ==  0 )
    {
        echo "$year is a LeapYear"."\n";

    }
    else{
        echo "$year is a not LeapYear"."\n";
    }
}
FindLeapYear(2009);