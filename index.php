<?php

$mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre",
    "octobre", "novembre", "décembre"];

echo $mois[2];

echo "<br>" . $mois[5];

$mois[5] = "août";

echo "<br>" . $mois[5];

$truc = [59 => "Poubelle du nord...", "autre" => "nul, pourris"];

echo "<br><br>" . $truc[59];

echo "<br><br>";

foreach ($mois as $key => $value){
    echo "index " . $key . " => " . $value . "<br>";
}

?>