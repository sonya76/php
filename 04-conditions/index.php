<?php
/*
>
<
>=
<=
==
===
!=
!==
*/
//===============
// if /elsif/else
//===============
// $age = 20;
// if($age >= 18){
//     echo 'Vous avez le droit de voter';
// } else {
//     // echo 'Vous n\'avez pas le droit de voter';
//     echo "Vous n'avez pas le droit de voter car votre âge est de  $age ans";
// }

// $heure = date('H');
$heure = 23;
// Avec la condition if/elseif afficher si on est le matin ou le soir
// if ($heure <= 12) {
//     echo 'On est le matin';
// } elseif ($heure >= 18)
// {
//     echo 'On est le soir';
// }

// Avec la condition if/elseif/else afficher si on est le matin,l'apres midi ou le soir
if ($heure <= 12) {
    echo 'On est le matin';
} elseif ($heure >= 18)
{
    echo 'On est le soir';
} else {
    echo 'On est l\'apres midi';
}





