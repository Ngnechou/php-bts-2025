<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cour php</title>
</head>
<body>
    <h1>les fonctions en php</h1>
    <a href="index.php">cours-php-bts 2025</a> <br><br>
    
    <?php
  $nom = " laurenne grace";
  echo "taille: " . strlen($nom) . '<br>';
   echo "espace: " . trim($nom) . '<br>';
   echo "nombre de mot: " . str_word_count($nom) . '<br>';
    echo  "inverce: " . strrev($nom) . '<br>';
    echo "majiscule: " . strtoupper($nom) . '<br>';
    echo "minucules:  "  . strtolower($nom) . '<br>';

    $fact1 = 123;
    $fact2 = 345678;
    echo  str_pad($fact1 , 6, '0', STR_PAD_LEFT) .'<br>';
    echo str_repeat('hello!' , 2) .'<br>';
    $longText = " 
    Hello, my name is laurenne 
    I am 27, 
        I love my daughter 
        "; 
echo $longText . '<br>'; 
echo nl2br($longText) . '<br>'; 
    ?>
</body>
</html>