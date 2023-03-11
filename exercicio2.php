<?php

// (1018) Banknotes

$value = readline();

$notes = [100, 50, 20, 10, 5, 2 ,1];

echo "$value\n";

foreach ($notes as $note){
    $amountNotes = intval($value / $note);

    echo "$amountNotes nota(s) de R$ $note,00\n";

    $value = $value % $note;
}

?>
