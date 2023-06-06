<?php

function calculateFunc($num1, $operations, $num2){
    $ans;
    switch($operations){
        case "add":
            $ans = $num1 + $num2;
            break;
        case "subtract":
            $ans = $num1 - $num2;
            break;
        default:
        $ans = "Output Error";
        break;
    }
    return $ans;
}

$num1 = $_GET["num1"];
$operations = $_GET["operations"];
$num2 = $_GET["num2"];

echo "Calculated Value: ".calculateFunc($num1, $operations, $num2);