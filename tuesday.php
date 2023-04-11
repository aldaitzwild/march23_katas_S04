<?php
/**
 * en vous servant du tableau suivant, trier les membre par nom 
 * et afficher le résultat suivant :
 * 
    Donatello a le bandeau violet
    Leonardo a le bandeau bleu
    Michelangleo a le bandeau orange
    Raphael a le bandeau rouge 
 */

 $tmnts = [
    ['name' => 'Leonardo', 'color' => 'bleu'],
    ['name' => 'Michelangleo', 'color' => 'orange'],
    ['name' => 'Donatello', 'color' => 'violet'],
    ['name' => 'Raphael', 'color' => 'rouge'],
 ];

 usort($tmnts, function ($firstVal, $secondVal){
    return $firstVal < $secondVal ? -1 : 1;
 });

 foreach($tmnts as $ninja) {
    echo $ninja['name'] . " a le bandeau " . $ninja['color'] . PHP_EOL;
 }