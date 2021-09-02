<?php
    function highAndLow($numbers) {
    $sortedArray = explode(" ", $numbers);
    sort($sortedArray);
    return $sortedArray[sizeof($sortedArray) - 1] . " " . $sortedArray[0];
    }