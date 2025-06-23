
    <h1>les types de données en php</h1>
   
    
    <?php
    //les types de données en php
    /*
**** 1. types scalaires(simples)****
*
*/
// a. les entiers(int) 
$nbr1 =12;

echo"<pre>";
echo(var_dump($nbr1));
echo"</pre>";
$nbr2=12.5;

//b .nombre a virgule flatente(floar/double)

$prix =19.99;

echo"<pre>";
echo(var_dump($prix));
echo"</pre>";
$nbr2=12.5;

// c. chaine de caracteres(string)

$name = "owen";


echo"<pre>";
echo(var_dump($name));
echo"</pre>";
$nbr2=12.5;

//d. booleen(bool)

$disponible =true; //ou $disponible=false

echo"<pre>";
echo(var_dump($disponible));
echo"</pre>";
$nbr2=12.5;
  /*
**** 1. types composés****
*
*/
// a. tableau(array)
//tableau indexes(1,2...)
$colors=["green", "yellow","red"];
echo"<pre>";
echo(var_dump($colors));
echo"</pre>";
$fruits=[
    "pomme","orranger","raisin","mangue","fraise"
];
echo"<pre>";
echo(var_dump($fruits));
echo"</pre>";
// tableau associative

$person=[
    "name" =>"myra",
    "date" =>10,
    "admin" =>true
];
echo"<pre>";
echo(var_dump($person));
echo"</pre>";