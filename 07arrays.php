<?php
include 'layouts/header.php';


echo '<h1 style="color:red"> tableau en php </h1>';
$fruits =["mango","strawberry","blueberry"];

echo '<pre>';
var_dump($fruits);
echo '<pre>';

echo $fruits[1] .'<br>';


include 'layouts/footer.php';

?>