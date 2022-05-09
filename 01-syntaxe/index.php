<!-- <h1>Un titre</h1> -->

<?php
// echo/print
// echo 'Texte en php' , ' Autre texte<br>';
//print 'Texte en php avec print<br>' , 'Autre texte avec print';

// un commentaire
# un commentaire
/*
* commmentaires
* sur plusieurs
* lignes
*/

// Variables
$variable = 'Une variable';
$Variable = 'Une autre variable';
//echo $variable , $Variable;

//$3var = 34;
$_3var = 34;
//echo $_3var;

$camelCase = 'une variable en camel case';
$snake_case = 'une variable en snake case';
$PascaleCase = 'une variable pascale case';
$var = 'une variable en kebab-case';

// string
$nom = 'mohamed';
// int
$nombre = 34;
// float
$nombreDecimale = 23.7;
// bool
$vrai = true;
$faux = false;
// array/objet
$tableau = ['grouge',34,45.6,false];
// null
$variable = null;

// simple/double guillemets(quotes)
// $message = "aujourd'hui";
// $message = 'aujourd\'hui';

$txt = 'Bonjour';
// echo '$txt tout le monde<br>';
// echo "$txt tout le monde";

// concatenation
$fruit1 = 'Kiwi';
$fruit1 = 'Pomme';
$fruit2 = 'Banane';
$fruit2 .= 'Poire';

// echo $fruit1 . '<br>' . $fruit2; 
// echo $fruit2 . '<br>';
// echo $fruit1;

$html = '';
$html .= '<h1>';
$html .= 'Cours de php';
$html .= '</h1>';
// $html .= '<h1>Cours de php</h1>';
// $html .= '<h1>Cours de php</h1>';
$html .= '<p>Ajout d\'un texte dans un paragraphe</p>';

echo $html;
?>
<h2>Texte en html dans une php</h2>

<?php
$titre = 'Texte de titre';
?>
<h4><?php echo $titre; ?></h4>
<h4><?= $titre; ?></h4>

<?php
$data1 = 'Hello';
$data2 = 'les terriens';
$data3 = 'Mars';
$data4 = 'planete';

// Avec les 2 methodes de concatenation ecrire la phrase dans un paragraphe : Hello, les terriens.Je viens de la planete Mars.

echo '<p>' . $data1 . ', ' . $data2 . '.Je viens de la ' . $data4 . ' ' . $data3 . '.</p>';
?>
<p><?php $data1 . ', ' . $data2 . '.Je viens de la ' . $data4 . ' ' . $data3 . '.'; ?></p>
<p><?=$data1 . ', ' . $data2 . '.Je viens de la ' . $data4 . ' ' . $data3 . '.'; ?></p>

<?php 
$html = '';
$html .= '<p>' .$data1 . ', ' . $data2;
$html .= '.Je viens de la ' . $data4 . ' ' . $data3 . '.</p>';
echo $html;



