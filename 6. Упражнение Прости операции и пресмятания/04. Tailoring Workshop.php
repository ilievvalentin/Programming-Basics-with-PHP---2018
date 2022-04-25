<?php

$numberOfTables = readline();
$tableLength = readline();
$tableWidth = readline();

$bigTableClothsArea = ($tableLength + 2 * 0.3) * ($tableWidth + 2 * 0.3) * $numberOfTables;
$smallTableClothsArea = pow($tableLength / 2, 2) * $numberOfTables;
$totalInUSD = $bigTableClothsArea * 7 + $smallTableClothsArea * 9;
$totalInBGN = $totalInUSD * 1.85;

echo number_format(round($totalInUSD, 2), 2, '.', ''), ' USD', PHP_EOL;
echo number_format(round($totalInBGN, 2), 2, '.', ''), ' BGN';