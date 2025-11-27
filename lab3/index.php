<?php

include_once "User.php";
require_once "function.php";
$var = 1;

$user= new User();
$user::get();
$user->index();


if ($var >= 0) {

    printSingle($var);
} else {
    printSingle($var);
}

$x = 6;

$fun = function () use($x) { 
    printSingle($x);
};

$fun();
$arrow = fn()=> printSingle("");


printSingle($x);
$result = add(3, 6);
printSingle($result);

printSingle(null);

process(function() {
    echo "تم التنفيذ داخل الكول باك!";
});

echo "<pre>";
print_r($_SERVER);
echo "</pre>";