
<?php


$database = [];

echo ("Hoeveel landen wil je toevoegen?" . PHP_EOL);
$gets = readline("");

for ($i = 0; $i < $gets; $i++) {

    echo ("Welk land wil je toevoegen" . PHP_EOL);
    $tland = readline("");
    echo ("wat is de hoofdstad van $tland?" . PHP_EOL);
    $thoofdstad = readline("");

    $database[$tland] = $thoofdstad;
}

echo ("De Volgende landen en steden zitten in de database?" . PHP_EOL);

foreach ($database as $kseya => $valuea) {


    echo $kseya . "," . $valuea . PHP_EOL;
}
