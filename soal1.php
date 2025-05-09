<?php
function generateA000124($n) {
    $result = [];

    for ($i = 0; $i < $n; $i++) {
        $value = ($i * ($i + 1)) / 2 + 1;
        $result[] = intval($value);
    }

    echo implode("-", $result);
}


$input = readline("Masukkan jumlah elemen: ");
generateA000124((int)$input);
?>
