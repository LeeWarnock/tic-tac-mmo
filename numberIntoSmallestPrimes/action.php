<?php
function primeFactors($numberToDecompose) {
    $count = 0;
    $factors = [];

    while ($numberToDecompose%2 == 0) {
        $factors[2] = 2;
        $numberToDecompose = $numberToDecompose/2;
        $count++;
    }

    if($count > 0) {
        $factors[2] = $count;
        $count = 0;
    }

    for ($i = 3; $i 0) {
        $factors[$i] = $count;
    }
}

    if ($numberToDecompose > 2) {
        $factors[$numberToDecompose] = 1;
    }

    return $factors;
}
?>