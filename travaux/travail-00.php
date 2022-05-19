<?php

$nombres = [27,15,34,379,248,5643,81,211,999,142,300,572];

echo '<ul>';

foreach($nombres as $nombre){
		if($nombre % 2 === 0){
			echo '<li>'. $nombre .' : pair</li>';
		} else {
			echo '<li>'. $nombre .' : impair</li>';
		}
}

echo '</ul>';
