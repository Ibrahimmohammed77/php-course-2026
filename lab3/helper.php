<?php 


function notFound($var)
{
    if ($var == null) {
        printSingle("notFound");
    }
    printSingle($var);
}

function printSingle($var)
{
    echo "<br>";
    echo " <h4 style='color:red'>we are here </h4>";
    echo $var;
    echo "<br>";
}

