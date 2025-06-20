<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cour php</title>
</head>
<body>
    <h1>les nombres en php</h1>
    <a href="index.php">cours-php-bts 2025</a> <br><br>
    
    <?php
  $a=4;
  $b=5;

 
  echo "Addition : " . ($a + $b) . '<br>'; 

    echo "soustraction: " . ($a - $b) . '<br>'; 
    echo "division: " . ($a / $b) . '<br>'; 
     echo "multiplication: " . ($a * $b +6) . '<br>';
      echo "modulo: " . ($b % $a) . '<br>'; 
      echo "post-increment (/$a++): " . $a++ . '<br>';
      echo "Pré-incrément (++\$a): " . ++$a . '<br>';
echo "Post-décrément (\$a--): " . $a-- . '<br>';
echo "Post-décrément (\$a--): " . --$a . '<br>';
      $nombre = 1234.56; 
  echo number_format( 
  num: $nombre, 
  decimals: 2, 
  decimal_separator: '.', 
  thousands_separator: ',' 
  ) . '<br>';

  $strNumber = '12.34';
  $number = (float)$strNumber;
  var_dump($number);
  echo '<br>';

  echo "abs(-15) : " . abs(-15) . '<br>';
  echo "pow(2, 3) : " . pow(2, 3) . '<br>';
  echo "sqrt(16) : " .sqrt(16) . '<br>';
  echo "sqrt(16) : " .sqrt(16) . '<br>';
  echo "max(1, 6) : " .max(1, 6) . '<br>';
  echo "round(1.6) : " .round(2.6) . '<br>';
  echo "floor(2.6) : " . floor(2.6) . '<br>'; 
echo "ceil(2.4) : " . ceil(2.4) . '<br>'; 

$nombre = 1234.56; 
echo number_format( 
num: $nombre, 
decimals: 2, 
decimal_separator: '.', 
thousands_separator: ',' 
) . '<br>';
  
      
      
    ?>
</body>
</html>