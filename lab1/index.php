<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php

$fruits = ["name" => "apple", "price" => "22"];

foreach ($fruits as $key=> $fruit) {
    echo "this column ".'<h1 style="color:red">'. $key.'</h1>'." this is value " . $fruit . '<br>';
}?>
</body>
</html>


