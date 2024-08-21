<?php

class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {
        return ctype_upper($word) || ctype_lower($word) || ucfirst(strtolower($word)) === $word;
    }
}

$solution = new Solution();

$palavra1 = "USA";
$palavra2 = "FlaG";

echo "Palavra 1: $palavra1 -> " . ($solution->detectCapitalUse($palavra1) ? "verdadeiro" : "falso") . "\n";
echo "Palavra 2: $palavra2 -> " . ($solution->detectCapitalUse($palavra2) ? "verdadeiro" : "falso") . "\n";

while (true) {
    echo "Digite uma palavra para verificar o uso de maiúsculas (ou digite 'sair' para finalizar): ";
    $input = trim(fgets(STDIN));

    if (strtolower($input) === 'sair') {
        echo "Encerrando o programa.\n";
        break;
    }

    echo "Palavra digitada: $input -> " . ($solution->detectCapitalUse($input) ? "verdadeiro" : "falso") . "\n";
}

?>
