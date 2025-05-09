<?php

function isBalanced($input) {
    $stack = [];

    $bracketPairs = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];

    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        if ($char == '(' || $char == '{' || $char == '[') {
            // Push karakter pembuka ke stack
            array_push($stack, $char);
        }
        elseif ($char == ')' || $char == '}' || $char == ']') {
            if (empty($stack) || array_pop($stack) != $bracketPairs[$char]) {
                return "NO";
            }
        }
    }

    return empty($stack) ? "YES" : "NO";
}

$input = trim(fgets(STDIN));

echo isBalanced($input) . PHP_EOL;
?>
