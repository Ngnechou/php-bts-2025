<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cour php</title>
</head>
<body>
    <h1>les conditions en php</h1>
    <a href="index.php">cours-php-bts 2025</a> <br><br>
    
    <?php
   $note = 12;
   echo $note > 10 ? 'admis' : 'echec' ;
  echo '<br>';
   $age = 14;
   echo $age > 18 ? " majuer" : "minneur";
 $longText = " 
Hello, my name is eva 
I am 27, 
I love my daughter 
"; 
echo $longText . '<br>'; 
echo nl2br($longText) . '<br>';
 
    ?>
</body>
</html>