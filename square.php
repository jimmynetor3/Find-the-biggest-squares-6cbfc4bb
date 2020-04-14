<?php
$input = file_get_contents('input.txt');
$inputLines = explode("\n", $input);

for ($i = 0; $i < count($inputLines); $i++) {
    $characters = getCharactersFromLine($i);

    for ($j = 0; $j < count($characters); $j++){
        $character = $characters[$j];
        if ($j + 1 < count($characters) && $i + 1 < count($inputLines)){
            $nextLineCharacters = getCharactersFromLine($i + 1);

            $nextCharacter = $characters[$j + 1];
            $nextLineCharter = $nextLineCharacters[$j];
            $nextLineNextCharter = $nextLineCharacters[$j + 1];

            if ($character === $nextCharacter && $character === $nextLineCharter && $character === $nextLineNextCharter){
                $lineReadable = $i + 1;
                $characterReadable = $j + 1;
                echo 'found square at line ' . $lineReadable . ' and character ' . $characterReadable;
                echo PHP_EOL;
            }
        }
    }
}

function getCharactersFromLine($lineNumber) {
    $input = file_get_contents('input.txt');
    $lines = explode("\n", $input);

    $line = $lines[$lineNumber];
    $characters = str_split($line);
    return $characters;
}