<?php

date_default_timezone_set('Europe/Paris');

/* Afficher la date du lendemain des dates suivantes. 
Elles doivent avoir le format suivant 'HH:MM:SS JJ/MM/YYYY' :
 * - La date et l'heure du jour.
 * - 2022-12-31 23:59:59
 * - 2021-02-28 20:32:19
*/

function addADay(string $date): string
{
    $nextDay = new \DateTime($date);
    $nextDay->modify("+1 days");
    return $nextDay->format("H:i:s d-m-Y");
}

echo addADay("now") . "\n";
echo addADay("2022-12-31 23:59:59") . "\n";
echo addADay("2021-02-28 20:32:19") . "\n";