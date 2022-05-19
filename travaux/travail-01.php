<style>
table , th , td {
	border:solid 1px black;
}	
td {
	padding: .5rem;	
}
</style>
<?php

$degCelTab = [25,3,35,11];

echo '<table>';
echo '<thead>';
echo '<th>°C</th><th>°F</th>';
foreach($degCelTab as $degC) {
		$degF = $degC * 1.8 + 32;
		echo '<tr><td>'. $degC  .'</td><td>'. round($degF,0) .'</td></tr>';
}
echo '</thead>';
echo '<table>';

?>
