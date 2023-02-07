<?php
// pour avoir des informations sur les versions etc --> phpinfo ()
// phpinfo();

// Pour les calculs on utilise les symboles suivant :
//* pour la multiplication
//  / pour la division
// + et - 
// += / -= plus ou moins au résultat 
// % pour avoir le reste de la division
$x = 4;
$y = 2;
$z = 5;

$calcul = $x + $y;
// echo $calcul;
$calcul1 = $x % $z;
// echo $calcul1;

$a = 5;
$b = 7;

$a += 6; //$a = $a + 6;
$a -= 6;
// echo $a;

$prix = 34;
$tva = 10;

$prixttc = $prix + ($prix * $tva / 100);
// echo $prixttc;

//calculer l'âge d'une personne en fonction de son année de naissance

$anneedenaissance = 1990;
//  la fonction date permet de réccuperer l'année en cours 
$today = date("Y");

$age =  $today - $anneedenaissance;
echo $age . " ans." . "<br>";

$i = 0;
$i++;

echo $i . "<br>";

$j = 10;
$j--;

echo $j . "<br>";
