<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cour php</title>
</head>
<body>
    <h1>les conditions et les operations ternaires en php</h1>
    <a href="index.php">cours-php-bts 2025</a> <br><br>
    
    <?php
   $note = 12;
   echo $note > 10 ? 'admis' : 'echec' ;
  echo '<br>';
   $age = 14;
   echo $age > 18 ? " majuer" : "mineur";
    echo '<br>';
 $longText = " 
Hello, my name is laurenne 
I am 27, 
I love my daughter 
"; 
echo $longText . '<br>'; 
echo nl2br($longText) . '<br>';
 
 echo '<br>';
 $ag = 20;
 $salary = 250000;

 if($ag>= 18 ) {
    echo "vous etes majeur";
 } else {
    echo "vous etes mineur";
 }
  echo '<br>';
 if($ag>= 18 && $age <= 65 ) {
    echo "vous etes en age de travail";
 } else {
    echo "vousn'etez pas en age de travail";
 }
  echo '<br>';
   echo '<br>';
   $userRole = 'editor';

   if( $userRole === 'admin'){
   echo 'you have full access.<br>';
}
 elseif ($userRole === 'editor') {
echo 'you can edit content.<br>';
} elseif ( $useRole === 'user'){
echo 'you can veir posts and comment.<br>';
} else {
 echo 'unknown role .<br>';

}
   
    ?>
</body>
</html>