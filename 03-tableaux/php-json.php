<?php
$person1 = [
    'nom' => 'Carle',
    'prenom' => 'Awa',
    'email' => 'carwa@laposte.fr'
];

$people = [
    $person1,
    [
        'prenom' => 'Mohamed',
        'nom' => 'Mourad',
        'email' => 'mohmou@yahoo.com',
    ],
    [
        'prenom' => 'Lucie',
        'nom' => 'Dupond',
        'email' => 'ludu@gmail.com'
    ]
    ];
echo '<pre>';
// print_r($people);

// Afficher l'email et le nom de famille de Lucie
// echo 'Le nom de Lucie est : ' . $people[2]['nom'] . PHP_EOL;
// echo 'L\email de Lucie est : ' . $people[2]['email'];
echo '<hr>';
$json_file = json_encode($people);
echo $json_file;





echo '</pre>';