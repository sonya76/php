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

// $html = '<ul>';
// foreach($ages as $key => $value)
// {
//     $html .= '<li>' . $key . ' a ' . $value . ' ans</li>';    
// }
// $html .=  '</ul>';
// echo $html; 

// Creer un tableau $notes avec un prenom => une note
// Afficher une liste ul des eleves et leur notes
// Marc a obtenu 15/20

$notes = [
    'Karima' => 18,
    'Patrick' => 12,
    'Loic' => 10,
    'Allah' => 15
];
// $html = '<ul>';
// foreach($notes as $key => $value)
// {
//     $html .= '<li>' . $key . ' a obtenu ' . $value . '/20</li>';
// }
// $html .= '</ul>';
// echo $html;

// $tab4 = array_merge($ages,$notes);

// print_r($tab4);

$planetes = ['mars','terre','pluton','venus','jupiter'];
// print_r($planetes);
// print_r($notes);
// echo '<hr>';
// asort($planetes); // tri des valeurs d'un tableau par ordre croissant
// asort($notes); 
// rsort($notes); // tri tableau par ordre decroissant
// ksort($notes); // tri tableau en fonction des clefs par ordre croissant
// arsort($notes); // tri tableau en fonction des valeurs par ordre decroissant
// krsort($notes); // tri en fonction des clefs par ordre decroissant

// print_r($planetes);
// print_r($notes);

// Créer un tableau avec les mois de l'annnée
// - afficher la valeur de la 5eme ligne de ce tableau
// - afficher la valeur de l'index 10
// - modifier le mois d'avril en le mettant en majuscule

// Créer un tableau associatif des departements de la region normandie
// avec le nom du departement en valeur et son code postale en index
// - afficher la valeur de l'index 27
// - ajouter le departement et code postale de la ville de Brest
// - parcourir le tableau des departements et afficher chaque departement dans un parapraphe p de la façon suivante :
// 'nom du departement' possede le code postale suivant :  'code postale'

// $mois = ['janvier','fevrier','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','decembre'];
// echo 'La 5eme ligne de ce tableau est : ' . $mois[4] .'<br>' ;
// echo 'La valeur de l\'index 10 est : ' . $mois[10] . '<br>';
// echo '<hr>';
// $mois[3] = 'AVRIL';
// $mois[3] = strtoupper($mois[3]);

// 

// $tab = [
//     'voiture' => 'ford',
//     'nombre' => [1,2,3,4],
//     'planete' => ['mars','terre']
// ];

$tab = [];
$tab[] = ['A','B','C'];
$tab[] = ['Q','R','T'];
$tab[] = ['E','U','P','I'];
print_r($tab);
echo '<hr>';
// echo $tab['planete'][0];
// Ecrire le mot CEPPIC













echo '</pre>';