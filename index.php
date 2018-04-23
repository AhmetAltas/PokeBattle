<!DOCTYPE html>
<html>
<head>

	<title>pokebattle</title>
</head>
<body>

</body>
</html>


<?php

require 'Pokemon.php';
require 'Attack.php';

$pokemons = [];

$m = new Pokemon("Muk", 75,105, 8);
$m->Attacks[] = new Attack("Pound", 40, 100);
$pokemons[] = $m;

$l = new Pokemon("Lucario", 70, 70, 7);
$l->Attacks[] = new Attack("Quick Attack", 40, 100);
$pokemons[] = $l;

$i = new Pokemon("Infernape", 71,76, 2);
$i->Attacks[] = new Attack("Scratch", 40, 100);
$pokemons[] = $i;

$n = new Pokemon("Onix", 40,46, 13);
$n->Attacks[] = new Attack("Peck", 35, 100);
$pokemons[] = $n;

$me = new Pokemon("Electrobuzz", 100,100, 4);
$me->Attacks[] = new Attack("Pound", 40, 100);
$pokemons[] = $me;

$b = new Pokemon("Beedrill", 40,65, 12);
$b->Attacks[] = new Attack("Twineedle", 25, 100);
$pokemons[] = $b;

$bl = new Pokemon("Blastoise", 100,79 ,3);
$bl->Attacks[] = new Attack("Tackle", 40, 100);
$pokemons[] = $bl;

$p = new Pokemon("Pidgeotto", 55,63, 10);
$p->Attacks[] = new Attack("Tackle", 40, 100);
$pokemons[] = $p;

$mt = new Pokemon("Mewtwo", 90,106, 11);
$mt->Attacks[] = new Attack("Confusion", 50, 100);
$pokemons[] = $mt;

$allP = array($mt, $m);

$pm1 = array_rand($pokemons, 1);
$pm2 = array_rand($pokemons, 1);

prettyPrint($pokemons[$pm1]);
prettyPrint($pokemons[$pm2]);

//prettyPrint($pokemons[$pm1]);

foreach($pokemons[$pm1]->Attacks as $attack) {
	if ($pokemons[$pm2]->Type == 13 && $pokemons[$pm1]->Type == 1 || $pokemons[$pm2]->Type == 17 && $pokemons[$pm1]->Type == 1 || $pokemons[$pm2]->Type == 2 && $pokemons[$pm1]->Type == 2 || $pokemons[$pm2]->Type == 3 && $pokemons[$pm1]->Type == 2 || $pokemons[$pm2]->Type == 13 && $pokemons[$pm1]->Type == 2 || $pokemons[$pm2]->Type == 15 && $pokemons[$pm1]->Type == 2 || $pokemons[$pm2]->Type == 3 && $pokemons[$pm1]->Type == 3 || $pokemons[$pm2]->Type == 5 && $pokemons[$pm1]->Type == 3 || $pokemons[$pm2]->Type == 15 && $pokemons[$pm1]->Type == 3 || $pokemons[$pm2]->Type == 4 && $pokemons[$pm1]->Type == 4 || $pokemons[$pm2]->Type == 5 && $pokemons[$pm1]->Type == 4 || $pokemons[$pm2]->Type == 15 && $pokemons[$pm1]->Type == 4 || $pokemons[$pm2]->Type == 2 && $pokemons[$pm1]->Type == 5 || $pokemons[$pm2]->Type == 5 && $pokemons[$pm1]->Type == 5 || $pokemons[$pm2]->Type == 8 && $pokemons[$pm1]->Type == 5 || $pokemons[$pm2]->Type == 10 && $pokemons[$pm1]->Type == 5 || $pokemons[$pm2]->Type == 12 && $pokemons[$pm1]->Type == 5 || $pokemons[$pm2]->Type == 15 && $pokemons[$pm1]->Type == 5 || $pokemons[$pm2]->Type == 17 && $pokemons[$pm1]->Type == 5 || $pokemons[$pm2]->Type == 2 && $pokemons[$pm1]->Type == 6 || $pokemons[$pm2]->Type == 3 && $pokemons[$pm1]->Type == 6 || $pokemons[$pm2]->Type == 6 && $pokemons[$pm1]->Type == 6 || $pokemons[$pm2]->Type == 17 && $pokemons[$pm1]->Type == 6 || $pokemons[$pm2]->Type == 8 && $pokemons[$pm1]->Type == 7 || 

	$pokemons[$pm2]->Type == 10 && $pokemons[$pm1]->Type == 7 || $pokemons[$pm2]->Type == 11 && $pokemons[$pm1]->Type == 7 || $pokemons[$pm2]->Type == 12 && $pokemons[$pm1]->Type == 7 || $pokemons[$pm2]->Type == 18 && $pokemons[$pm1]->Type == 7 || $pokemons[$pm2]->Type == 8 && $pokemons[$pm1]->Type == 8 || $pokemons[$pm2]->Type == 9 && $pokemons[$pm1]->Type == 8 || $pokemons[$pm2]->Type == 13 && $pokemons[$pm1]->Type == 8 || $pokemons[$pm2]->Type == 14 && $pokemons[$pm1]->Type == 8 || $pokemons[$pm2]->Type == 5 && $pokemons[$pm1]->Type == 9 || $pokemons[$pm2]->Type == 12 && $pokemons[$pm1]->Type == 9 || $pokemons[$pm2]->Type == 4 && $pokemons[$pm1]->Type == 10 || $pokemons[$pm2]->Type == 13 && $pokemons[$pm1]->Type == 10 || $pokemons[$pm2]->Type == 17 && $pokemons[$pm1]->Type == 10 || $pokemons[$pm2]->Type == 11 && $pokemons[$pm1]->Type == 11 || $pokemons[$pm2]->Type == 17 && $pokemons[$pm1]->Type == 11 || $pokemons[$pm2]->Type == 2 && $pokemons[$pm1]->Type == 12 || $pokemons[$pm2]->Type == 7 && $pokemons[$pm1]->Type == 12 || $pokemons[$pm2]->Type == 8 && $pokemons[$pm1]->Type == 12 || $pokemons[$pm2]->Type == 10 && $pokemons[$pm1]->Type == 12 || $pokemons[$pm2]->Type == 14 && $pokemons[$pm1]->Type == 12 || 

	$pokemons[$pm2]->Type == 17 && $pokemons[$pm1]->Type == 12 || $pokemons[$pm2]->Type == 18 && $pokemons[$pm1]->Type == 12 || $pokemons[$pm2]->Type == 7 && $pokemons[$pm1]->Type == 13 || $pokemons[$pm2]->Type == 9 && $pokemons[$pm1]->Type == 13 || $pokemons[$pm2]->Type == 17 && $pokemons[$pm1]->Type == 13 || $pokemons[$pm2]->Type == 16 && $pokemons[$pm1]->Type == 14 || $pokemons[$pm2]->Type == 17 && $pokemons[$pm1]->Type == 15) {
		prettyPrint($pokemons[$pm1]->Name . " used " . $attack->Name . ' on ' . $pokemons[$pm2]->Name . '! ' . "It's not very effective!");
		$attack->Execute1($pokemons[$pm2]);
	} else if ($pokemons[$pm2]->Type == 5 && $pokemons[$pm1]->Type == 2 || $pokemons[$pm2]->Type == 6 && $pokemons[$pm1]->Type == 2 || $pokemons[$pm2]->Type == 12 && $pokemons[$pm1]->Type == 2 || $pokemons[$pm2]->Type == 17 && $pokemons[$pm1]->Type == 2 || $pokemons[$pm2]->Type == 2 && $pokemons[$pm1]->Type == 3 || $pokemons[$pm2]->Type == 9 && $pokemons[$pm1]->Type == 3 || $pokemons[$pm2]->Type == 13 && $pokemons[$pm1]->Type == 3 || $pokemons[$pm2]->Type == 3 && $pokemons[$pm1]->Type == 4 || $pokemons[$pm2]->Type == 10 && $pokemons[$pm1]->Type == 4 || $pokemons[$pm2]->Type == 3 && $pokemons[$pm1]->Type == 5 || $pokemons[$pm2]->Type == 9 && $pokemons[$pm1]->Type == 5 || $pokemons[$pm2]->Type == 13 && $pokemons[$pm1]->Type == 5 || $pokemons[$pm2]->Type == 5 && $pokemons[$pm1]->Type == 6 || $pokemons[$pm2]->Type == 9 && $pokemons[$pm1]->Type == 6 || $pokemons[$pm2]->Type == 10 && $pokemons[$pm1]->Type == 6 || $pokemons[$pm2]->Type == 15 && $pokemons[$pm1]->Type == 6 || $pokemons[$pm2]->Type == 1 && $pokemons[$pm1]->Type == 7 || $pokemons[$pm2]->Type == 6 && $pokemons[$pm1]->Type == 7 || $pokemons[$pm2]->Type == 13 && $pokemons[$pm1]->Type == 7 || 

		$pokemons[$pm2]->Type == 16 && $pokemons[$pm1]->Type == 7 || $pokemons[$pm2]->Type == 17 && $pokemons[$pm1]->Type == 7 || $pokemons[$pm2]->Type == 5 && $pokemons[$pm1]->Type == 8 || $pokemons[$pm2]->Type == 18 && $pokemons[$pm1]->Type == 8 || $pokemons[$pm2]->Type == 2 && $pokemons[$pm1]->Type == 9 || $pokemons[$pm2]->Type == 4 && $pokemons[$pm1]->Type == 9 || $pokemons[$pm2]->Type == 8 && $pokemons[$pm1]->Type == 9 || $pokemons[$pm2]->Type == 13 && $pokemons[$pm1]->Type == 9 || $pokemons[$pm2]->Type == 17 && $pokemons[$pm1]->Type == 9 || $pokemons[$pm2]->Type == 5 && $pokemons[$pm1]->Type == 10 || $pokemons[$pm2]->Type == 7 && $pokemons[$pm1]->Type == 10 || $pokemons[$pm2]->Type == 12 && $pokemons[$pm1]->Type == 10 || $pokemons[$pm2]->Type == 7 && $pokemons[$pm1]->Type == 11 || $pokemons[$pm2]->Type == 8 && $pokemons[$pm1]->Type == 11 || $pokemons[$pm2]->Type == 5 && $pokemons[$pm1]->Type == 12 || $pokemons[$pm2]->Type == 11 && $pokemons[$pm1]->Type == 12 || $pokemons[$pm2]->Type == 16 && $pokemons[$pm1]->Type == 12 || 

		$pokemons[$pm2]->Type == 2 && $pokemons[$pm1]->Type == 13 || $pokemons[$pm2]->Type == 6 && $pokemons[$pm1]->Type == 13 || $pokemons[$pm2]->Type == 10 && $pokemons[$pm1]->Type == 13 || $pokemons[$pm2]->Type == 12 && $pokemons[$pm1]->Type == 13 || $pokemons[$pm2]->Type == 11 && $pokemons[$pm1]->Type == 14 || $pokemons[$pm2]->Type == 14 && $pokemons[$pm1]->Type == 14 || $pokemons[$pm2]->Type == 15 && $pokemons[$pm1]->Type == 15) {
		prettyPrint($pokemons[$pm1]->Name . " used " . $attack->Name . ' on ' . $pokemons[$pm2]->Name . '! ' . "It's super effective!");
		$attack->Execute2($pokemons[$pm2]);
	} else if ($pokemons[$pm2]->Type == 14 && $pokemons[$pm1]->Type == 1 || $pokemons[$pm2]->Type == 9 && $pokemons[$pm1]->Type == 4 || $pokemons[$pm2]->Type == 14 && $pokemons[$pm1]->Type == 7 || $pokemons[$pm2]->Type == 17 && $pokemons[$pm1]->Type == 8 || $pokemons[$pm2]->Type == 10 && $pokemons[$pm1]->Type == 9 || $pokemons[$pm2]->Type == 16 && $pokemons[$pm1]->Type == 11 || $pokemons[$pm2]->Type == 1 && $pokemons[$pm1]->Type == 14 || $pokemons[$pm2]->Type == 18 && $pokemons[$pm1]->Type == 15) {
		prettyPrint($pokemons[$pm1]->Name . " used " . $attack->Name . ' on ' . $pokemons[$pm2]->Name . '! ' . 'It had no effect!');
		$attack->Execute3($pokemons[$pm2]);
	} else {
		prettyPrint($pokemons[$pm1]->Name . " used " . $attack->Name . ' on ' . $pokemons[$pm2]->Name . '!');
		$attack->Execute4($pokemons[$pm2]);
	}
	
}



function prettyPrint($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}
?>


