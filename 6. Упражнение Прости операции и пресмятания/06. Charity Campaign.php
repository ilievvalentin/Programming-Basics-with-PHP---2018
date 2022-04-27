<?php

$lengthOfCampaignInDays = readline();
$numberOfBakers = readline();
$numberOfCakes = readline();
$numberOfWaffles = readline();
$numberOfPancakes = readline();

$cakesSubtotalForOneDayForOneBacker = $numberOfCakes * 45;
$wafflesSubtotalForOneDayForOneBacker = $numberOfWaffles * 5.8;
$pancakesSubtotalForOneDayForOneBacker = $numberOfPancakes * 3.2;
$subtotalForOneDay =
    (
        $cakesSubtotalForOneDayForOneBacker
        + $wafflesSubtotalForOneDayForOneBacker
        + $pancakesSubtotalForOneDayForOneBacker
    )
    * $numberOfBakers;
$subtotalForWholeCampaign = $subtotalForOneDay * $lengthOfCampaignInDays;
$totalForWholeCampaign =
    $subtotalForWholeCampaign
    - 1 / 8 * $subtotalForWholeCampaign;

echo number_format(round($totalForWholeCampaign, 2), 2, '.', '');