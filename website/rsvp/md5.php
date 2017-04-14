<?php

$names = array(
    'Syntax Terror',
    'Robert\'); DROP TABLE Students; —',
    'THE CLOWNS',
    'Monta Vista Boys',
    'Callback',
    'Hogwarts',
    'SHS Fire',
    'Error 404',
    'Davis Senior High CSC 1',
    'Justin Li Carry',
    'ACEprep Cupertino',
    'ACEprep Dublin',
    'MMC',
    'Davis Senior High CSC 2',
    '3.1415',
    'kek',
    'Apes of Wrath',
    'MC^2',
    'Saratoga',
    'Naan',
    'Gold',
    'K&S',
    'Cole\'s Law',
    'Bovinia State University',
    'String "cheese"',
    'Team William and Jake',
    'ST1'
);

foreach ($names as $name) {
    echo $name . "      " . md5($name) . "\n";
}

?>
