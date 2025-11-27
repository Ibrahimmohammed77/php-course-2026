<?php 

function notFound($var)
{
    if ($var == null) {
        echo "notFound";
    }

    printSingle($var);
}

function printSingle($var)
{
    echo "<br>";
    echo $var;
}