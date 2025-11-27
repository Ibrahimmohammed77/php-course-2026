<?php

$x = 4;
function name()
{
    global $x;
    echo "Ali <br>";
    echo $x;
}

name();

$WO = function () use ($x) {
    echo "said", $x;
};

$f = fn() => "ali";


phpinfo();