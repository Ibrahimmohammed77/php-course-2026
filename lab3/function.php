<?php 
function printSingle($var)
{
    if ($var == null) {
        echo "<h1 style='color:red'>CY</h1 >";
    }
    echo $var;
    echo "<br>";
}


function add($a, $b)
{
    global $x;

    return $a * $b * $x;
}

function process($callback) {
    echo "بدء المعالجة...<br>";
    $callback();
}

