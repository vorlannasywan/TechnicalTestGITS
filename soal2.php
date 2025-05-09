<?php
function denseRanking($scores) {
    $uniqueScores = array_values(array_unique($scores));
    rsort($uniqueScores);

    $result = [];

    foreach ($scores as $score) {
        $rank = 1;
        $i = 0;

        while ($i < count($uniqueScores) && $score < $uniqueScores[$i]) {
            $rank++;
            $i++;
        }

        $result[] = $rank;
    }

    return $result;
}

echo "Masukkan jumlah pemain: ";
$scoreCount = intval(trim(fgets(STDIN)));

echo "Masukkan skor pemain (dipisah spasi): ";
$scores = array_map('intval', explode(' ', trim(fgets(STDIN))));

if (count($scores) !== $scoreCount) {
    echo "Jumlah skor yang dimasukkan tidak sesuai dengan jumlah pemain.\n";
    exit(1);
}

$output = denseRanking($scores);
echo "Ranking pemain: " . implode(" ", $output) . PHP_EOL;
?>
