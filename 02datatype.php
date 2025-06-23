<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cour php</title>
</head>
<body>
    <h1>les variables en php</h1>
    <a href="index.php">cours-php-bts 2025</a> <br><br>
    
    <?php
   $age=25;
   echo is_int($age); 
echo '<br>';
   
   $nom="lulu";
   echo "bonjour je m'appele $nom et j'ai $age ans"; 
   echo '<br>';
   echo '<b> bonjour </b>';
   echo '/bonjour';
     echo '<br>';
     echo 'bonjour je mappele ' .$nom .' et jai ' .$age. 'ans';
    echo '<br>';
    echo gettype($nom);
    echo '<br>';
    echo gettype($age);
     echo '<br>';
    var_dump($nom , $age);
    echo '<br>';
    isset($nom); 
    echo '<br>';
    var_dump(isset($age)); 
    ?>
