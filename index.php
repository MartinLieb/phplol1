<?php

$A = $_GET["a"];

$B = $_GET["b"];

$operation = $_GET["operation"];

switch ($operation) {
    case "plus";
        echo $A + $B;
        break;
    case "minus";
        echo $A - $B;
} 

?>
