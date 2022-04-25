<?php

$priceOfWhiskeyPerLiter = readline();
$quantityOfBeerInLiters = readline();
$quantityOfWineInLiters = readline();
$quantityOfRakiaInLiters = readline();
$quantityOfWhiskeyInLiters = readline();

$priceOfRakiaPerLiter = $priceOfWhiskeyPerLiter / 2;
$subtotalForRakia = $quantityOfRakiaInLiters * $priceOfRakiaPerLiter;
$priceOfWinePerLiter = $priceOfRakiaPerLiter - $priceOfRakiaPerLiter * 40 / 100;
$subtotalForWine = $quantityOfWineInLiters * $priceOfWinePerLiter;
$priceOfBeerPerLiter = $priceOfRakiaPerLiter - $priceOfRakiaPerLiter * 80 / 100;
$subtotalForBeer = $quantityOfBeerInLiters * $priceOfBeerPerLiter;
$subtotalForWhiskey = $quantityOfWhiskeyInLiters * $priceOfWhiskeyPerLiter;
$total = $subtotalForRakia + $subtotalForWine + $subtotalForBeer + $subtotalForWhiskey;

echo number_format(round($total, 2), 2, '.', '');