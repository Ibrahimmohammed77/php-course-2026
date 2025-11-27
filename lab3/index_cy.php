
<?php

// include "helper.php";


include "../lab2/helper.php";
$second = 2;
notFound($second);

$Aya = "Aya";
notFound($Aya);

function sum() {
    return 10 + 20;
}

$result = sum();

printSingle("النتيجة = $result");

$x = 5;
$closure = function () use ($x) {
    
    echo $x; // ❌ خطأ
};

$closure();



function sumAll(...$numbers) {
    $total = 0;

    foreach ($numbers as $n) {
        $total += $n;
    }

    return $total;
}

printSingle(" =نتيجة المجموع" . sumAll(1, 2, 3, 4, 5, 6, 7, 8, 9, 10));


echo "<pre>";
print_r($_SERVER);
echo "</pre>";


