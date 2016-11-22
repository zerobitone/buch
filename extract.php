<?php

$x = [
    'vorname' => 'Cord',
    'nachname' => 'Mählmann',
    'alter' => 45
];

extract($x);

echo $vorname . '<br>';
echo $nachname . '<br>';
echo $alter . '<br>';
