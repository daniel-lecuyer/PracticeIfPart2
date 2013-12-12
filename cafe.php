<?php
function getCoffeePrice($pricePerKilogramme, $amountOfKilogramme) {
    $coffeePrice = $pricePerKilogramme * $amountOfKilogramme;
    return $coffeePrice;  
}
function litersSpentPerTravel($litersSpentPerHundredKlometer, $distanceBetweenColombieMontreal) {
    $litersSpentPerTravel = $litersSpentPerHundredKlometer * $distanceBetweenColombieMontreal;
    return $litersSpentPerTravel;
}
function fuelPricePerTravel($litersSpentPerTRavel, $fuelPricePerLiter) {
    $fuelPricePerTravel = $litersSpentPerTRavel * $fuelPricePerLiter;
    return $fuelPricePerTravel;
}
function getCostPerTravel($coffeePrice, $fuelPricePerTravel) {
    $costPerTravel = $coffeePrice + $fuelPricePerTravel;
    return $costPerTravel;
}
function getText($costForThreeTravel) {
    if($costForThreeTravel < 2000) {
        return PHP_EOL."Le capitaine a un bonus: ".$costForThreeTravel.PHP_EOL;
    }
    if($costForThreeTravel > 2000) {
        return PHP_EOL."Le capitaine n'a pas de bonus: ".$costForThreeTravel.PHP_EOL;
    }
}

$pricePerKilogramme = rand(90, 195) / 100;
$amountOfKilogrammes = rand(200, 800);
$fuelPricePerLiter = rand(90, 145) / 100;
$distanceBetweenColombieMontreal = rand(5000, 6000) * 2;
$litersSpentPerHundredKilometers = 30 / 100;
$coffeePrice = getCoffeePrice($pricePerKilogramme, $amountOfKilogrammes);
$litersSpentPerTravel = litersSpentPerTravel($litersSpentPerHundredKilometers, $distanceBetweenColombieMontreal);
$fuelPricePerTravel = fuelPricePerTravel($litersSpentPerTRavel, $fuelPricePerLiter);
$costPerTravel = getCostPerTravel($coffeePrice, $fuelPricePerTravel);
$costForThreeTravel = $costPerTravel * 3;

$text = getText($costForThreeTravel);
echo $text;

        