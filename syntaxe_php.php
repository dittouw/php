<?php

// un commentaire
# un commentaire 
/* commentaire sur 
plusieurs
lignes
*/

//variables
$variable = 'une variable';
// echo $variable;

// echo "$variable, $Variable";

$camelCase = 'une variable en camel case';
$snake_case = 'une variable en snake case';
// $kebab-case = 'une variable en kebab case';
$PascalCase = 'une variable en pascal case';

$nombre = 45;
$nombreDecimal = 10.5;

$boolean = false;
// echo $boolean;

$fruit1 = 'pomme';
$fruit2 = 'poire';
// echo "$fruit1" . " " . "$fruit2";
// echo "<p>$fruit1" . "<br>" . "$fruit2</p>";

$resultat ='';
$resultat .= '<h1>';
$resultat .= 'cours php';
$resultat .= '</h1>';
// echo $resultat;
?>
<h2>texte</h2>
<?php
$titre = 'Texte de titre';
?>
<!-- deux façons d'afficher des éléments php -->
<h4><?php echo $titre;?></h4>
<h4><?= $titre?></h4>

<?php
$data1 = 'hello';
$data2 = 'les terriens';
$data3 = 'Mars';
$data4 = 'planète';

echo "$data1".", "."$data2"."."." Je viens de la "."$data4"." "."$data3".".";
?>
<p><?=$data1?>, <?=$data2?>. Je viens de la <?=$data4?> <?=$data3?>.</p>

<?php
$tableau =['groupe',23,4.5,false,[1,2,3]];
// pour afficher un tableau
echo'<pre>';
print_r($tableau);
var_dump ($tableau);
echo'</pre>';


// die permet de "tuer" le code qui se situe en dessous 
// die();

// echo 'TEST';
// Variables superglobales
echo '<pre>';
var_dump($_SERVER);
// renvoie l'url de l'endroit ou je me trouve, nom de du serv, etc 

echo'</pre>';

// constante en majuscule 
define('HOST','localhost');
define('USER','John Doe');
define('TABLEAU',['a','b','c','d']);
echo HOST;
echo '<hr>';
echo USER;
echo'<hr>';
print_r (TABLEAU);

