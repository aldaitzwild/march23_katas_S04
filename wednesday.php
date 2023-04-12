<?php
/**
 * A partir d'un tableau contenant des chiffres, en créer un second à deux dimensions
 * avec autant de case que mentionné dans le premier tableau
 * 
 * [4][2][8][3][5]
 * 
 * ==>
 * [4][4][4][4]
 * [2][2]
 * [8][8][8][8][8][8][8][8]
 * [3][3][3]
 * [5][5][5][5][5]
 * 
 * puis afficher avec un print_r()
 */

 $values = [4, 2, 8, 3, 5];
 $newDimension = [];

 foreach($values as $value) 
 {
    $line = [];

    for ($i = 0; $i < $value; $i++) { 
        $line[] = $value;
    }

    $newDimension[] = $line;
 }

 print_r($newDimension);