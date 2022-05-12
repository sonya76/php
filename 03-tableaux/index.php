<?php
// Tableau indexé
 // declaration d'un tableau
// $tableau = array();
// $tableau = [];
// $tableau2 = array('Lundi','Mardi',45,67.8,false);
// $tableau = [true,45,'Terre',56,[45,67,78]];
// $tableau = [
//     true,
//     45,
//     'Terre',
//     56,
//     [45,67,78]
// ];
echo '<pre>';
// print_r($tableau);

// $tableau[] = 'Janvier';
// $tableau[] = 45;
// $tableau[] = false;
// array_push($tableau,'voiture'); // ajout de voiture au tableau
// array_push($tableau,'voiture1', 'voiture2');

// echo count($tableau); // nombre elements dans un tableau
// echo '<hr>';

// print_r($tableau);
//  var_dump($tableau);

// echo $tableau[0];

$notes = [12,5,16,7];
// Afficher la moyenne des notes 
// $sommeNotes = $notes[0] + $notes[1] + $notes[2] + $notes[3];
// $moyenne = $sommeNotes / 4;
// $moyenne = ($notes[0] + $notes[1] + $notes[2] + $notes[3]) / 4;
// echo $moyenne;

// $tab3 = array_merge($tableau2,$tableau,$notes); // assemble des tableaux
// var_dump($tab3);

// for($i=0; $i < count($tableau2);$i++){
    // echo $tableau2[$i] . '<br>';
// }

// $fruits = ['Banane','Kiwi','Pomme','Poire'];

// $html = '';
// for($i = 0;$i < count($fruits);$i++) {
    // $html .= $fruits[$i] . ', ';
// }
// echo $html;

// foreach($fruits as $fruit)
// foreach($fruits as $value)
{
    // echo $value . '<br>';
    // echo $fruit . '<br>';
}

// Construire un tableau $nombres à l'aide la boucle for contenant les nombres de 34 à 78
// $nombres = [];
// for ($k = 34;$k < 78;$k++)
// {
    // $nombres[] = $k;
    // array_push($nombres,$k);
// }

// $nombres[3] = 100; 
// $nombres[0] .= 'kiwi';

// print_r($nombres);

//====================
// Tableau Associatif
//====================
$fruits = ['banane' => 'jaune','pomme' => 'rouge','kiwi' => 'vert'];
// print_r($fruits);

// echo 'La couleur de la pomme est ' . $fruits['pomme'] ;

// echo 'La longeur du tableau $fruits est de :' . sizeof($fruits); //sizeof est un alias de count

$ages = ['Muchel' => 34, 'Lucie' => 12, 'Mouloud' => 56];
$ages = [
    'Michel' => 34,
    'Lucie' => 12,
    'Mouloud' => 56
];
$chaine = implode('-',$ages); // assemble les valeurs du tableaux en une chaîne de caractere
// echo $chaine . '<hr>'; 
$ages2 = explode('-',$chaine); // transforme une chaine de caractere en un tableau en precisant delimiteur '-'
// print_r($ages2);
echo '<hr>';
$ages['Paul'] = 22; // ajout d'un nouvel elememtn au tableau $age
$ages['Lucie'] = 02; // modification d'une entree du tableau $age
// print_r($ages);

// foreach($ages as $clef => $valeur)
// {
    // echo $clef . ' a ' . $valeur . ' ans<br>';
// }

$html = '<ul>';
foreach($ages as $key => $value)
{
    $html .= '<li>' . $key . ' a ' . $value . ' ans</li>';    
}
$html .=  '</ul>';
echo $html; 

// Creer un tableau $notes avec un prenom => une note
// Afficher une liste ul des eleves et leur notes
// Marc a obtenu 15/20


























echo '</pre>';


