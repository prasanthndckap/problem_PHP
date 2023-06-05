<?php


$Height = readline('Enter height of the triangle:  ');
$Base = readline('Enter base of the triangle: ');

function AreaOfTriangle($input1, $input2)
{
    echo "Area of triangle is :";
    echo $Area = $input1 * $input2 * 1/2;
}
AreaOfTriangle($Height, $Base);

