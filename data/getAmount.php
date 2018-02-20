<?php

    $coin = $_GET["coin"];
    $date = $_GET["date"];

    $todayTimestamp = strtotime("now");
    $oldTimestamp = strtotime($date);

    $todayURL = "https://min-api.cryptocompare.com/data/pricehistorical?fsym=" . strtoupper($coin) . "&tsyms=USD&ts=" . $todayTimestamp;
    $oldURL = "https://min-api.cryptocompare.com/data/pricehistorical?fsym=" . strtoupper($coin) . "&tsyms=USD&ts=" . $oldTimestamp;

    $todayJson = file_get_contents($todayURL);
    $oldJson = file_get_contents($oldURL);
    
    $todayPrice = json_decode($todayJson, true)[strtoupper($coin)]["USD"];
    $oldPrice = json_decode($oldJson, true)[strtoupper($coin)]["USD"];

    $usdToday = 0;

    $bitcoinValue = 100 / $oldPrice;
    $usdToday = $todayPrice * $bitcoinValue;

    echo $usdToday;
?>