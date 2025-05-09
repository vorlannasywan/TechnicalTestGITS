<?php

function isBalanced($input) {
    // Stack untuk menyimpan karakter pembuka
    $stack = [];

    // Mapping pasangan bracket
    $bracketPairs = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];

    // Iterasi setiap karakter dalam input
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        // Cek apakah karakter adalah bracket pembuka
        if ($char == '(' || $char == '{' || $char == '[') {
            // Push karakter pembuka ke stack
            array_push($stack, $char);
        }
        // Cek apakah karakter adalah bracket penutup
        elseif ($char == ')' || $char == '}' || $char == ']') {
            // Jika stack kosong atau tidak cocok dengan pasangan pembuka, return NO
            if (empty($stack) || array_pop($stack) != $bracketPairs[$char]) {
                return "NO";
            }
        }
    }

    // Jika stack kosong, semua bracket seimbang
    return empty($stack) ? "YES" : "NO";
}

// Input
$input = trim(fgets(STDIN));

// Output
echo isBalanced($input) . PHP_EOL;
?>
