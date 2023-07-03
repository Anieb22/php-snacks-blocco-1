<?php
$randomNumbers = array();

while (count($randomNumbers) < 15) {
    $randomNumber = rand(1, 15);

    if (!in_array($randomNumber, $randomNumbers)) {
        array_push($randomNumbers, $randomNumber);
    }
}

print_r($randomNumbers);
?>
