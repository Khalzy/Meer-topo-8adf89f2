
<?php

$quiz = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Washington D.C",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "UK" => "London",
    "Egypt" => "Cairo",

);


// $g = 0;
// foreach ($quiz as $land => $hoofdstad) {
//     if ($c === true) {
//         $g++;
//     }


//     $c = false;
//     $country = readline("welke hoofdstad heeft $land?");

//     if ($country == $hoofdstad) {

//         echo "Correct!" . PHP_EOL;
//         $c = true;
//     } else {

//         echo "Helaas $country is niet de hoofdstad van $land" . PHP_EOL;
//         echo "Het Correcte antwoord is: $hoofdstad" . PHP_EOL;
//     }
// }

// echo "Je hebt " . $g . " van de  " . count($quiz) . "  goed geraden" . PHP_EOL;
// exit;


echo ("Hoeveel landen wil je toevoegen?" . PHP_EOL);
$gets = readline("");

for ($i = 0; $i < $gets; $i++) {

    echo ("Welk land wil je toevoegen" . PHP_EOL);
    $tland = readline("");
    echo ("wat is de hoofdstad van $tland?" . PHP_EOL);
    $thoofdstad = readline("");
    $database[$tland] = $thoofdstad;
}



foreach ($database as $kseya => $valuea) {
    echo ("De Volgende landen en steden zitten in de database?" . PHP_EOL);

    echo $kseya . "," . $valuea;
}
