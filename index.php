<?php

require 'Pokemon.php';
require 'Attack.php';

$m = new Pokemon("Muk", 75,105);
$m->Attacks[] = new Attack("Pound", 40, 100);

prettyPrint($m);

$l = new Pokemon("Lucario", 70, 70);
$l->Attacks[] = new Attack("Quick Attack", 40, 100);

prettyPrint($l);

$i = new Pokemon("Infernape", 71,76);
$i->Attacks[] = new Attack("Scratch", 40, 100);

prettyPrint($i);

$n = new Pokemon("Nidoran", 40,46);
$n->Attacks[] = new Attack("Peck", 35, 100);

prettyPrint($n);

$me = new Pokemon("Mew", 100,100);
$me->Attacks[] = new Attack("Pound", 40, 100);

prettyPrint($me);

$b = new Pokemon("Beedrill", 40,65);
$b->Attacks[] = new Attack("Twineedle", 25, 100);

prettyPrint($b);

$bl = new Pokemon("Blastoise", 100,79);
$bl->Attacks[] = new Attack("Tackle", 40, 100);

prettyPrint($bl);

$p = new Pokemon("Pidgeotto", 55,63);
$p->Attacks[] = new Attack("Tackle", 40, 100);

prettyPrint($p);

$mt = new Pokemon("Mewtwo", 90,106);
$mt->Attacks[] = new Attack("Confusion", 50, 100);

prettyPrint($mt);

$allP = array($mt, $m);

foreach($bl->Attacks as $attack) {
    prettyPrint("Execute attack " . $attack->Name . ' on ' . $p->Name);
    $attack->Execute($p);
}

prettyPrint($p);




function prettyPrint($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}