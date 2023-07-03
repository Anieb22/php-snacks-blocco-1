<?php
$partite = [
    [
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospite' => 'Cantù',
        'punti_casa' => 55,
        'punti_ospite' => 60
    ],
    [
        'squadra_casa' => 'Virtus Bologna',
        'squadra_ospite' => 'Varese',
        'punti_casa' => 72,
        'punti_ospite' => 68
    ],
    [
        'squadra_casa' => 'Reggiana',
        'squadra_ospite' => 'Trento',
        'punti_casa' => 78,
        'punti_ospite' => 76
    ],
];

foreach ($partite as $partita) {
    $squadra_casa = $partita['squadra_casa'];
    $squadra_ospite = $partita['squadra_ospite'];
    $punti_casa = $partita['punti_casa'];
    $punti_ospite = $partita['punti_ospite'];

    echo "$squadra_casa - $squadra_ospite | $punti_casa-$punti_ospite<br>";
}
?>
