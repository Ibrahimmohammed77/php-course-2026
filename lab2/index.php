
<?php
$first = 1;

if ($first == null) {
    echo "notFound";
}

$second = 2;
notFound($second);
echo "<br>";
echo $second;

function notFound($var)
{
    if ($var == null) {
        echo "notFound";
    }
    echo "<br>";
    echo $var;}
?>