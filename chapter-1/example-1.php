<?php

/**
 * A funcão pesquisa_binaria() pega um array ordenado e um item.
 * Se o item está no array, a função retorna a sua posição.
 * Dessa maneira, você é capaz de saber por qual ponto do array deve continuar procurando.
 */

function pesquisa_binaria($lista, $item)
{
    $contador = 1;
    $baixo = 0;
    $alto = count($lista) - 1;
    echo 'Valor de alto inicial: ' . $alto . PHP_EOL;
    while ($baixo <= $alto) {
        $meio = intdiv($baixo + $alto, 2);
        echo 'Valor de meio ' . $contador . 'º vez: '. $meio . PHP_EOL;
        $chute = $lista[$meio];
        echo 'Valor de chute ' . $contador . 'ºvez: '.$chute . PHP_EOL;
        $contador++;
        if ($chute == $item) {
            return $meio;
        } else if ($chute > $item) {
            $alto = $meio - 1;
        } else {
            $baixo = $meio + 1;
        }
    }
    return null;
}

;

$lista1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$lista2 = [1, 4, 3, 4, 6, 6, 7, 8, 9];
$item = 3;
$resultado = pesquisa_binaria($lista1, $item);

if ($resultado !== null) {
    echo 'O item foi encontrado na posição: ' . $resultado;
} else {
    echo 'Item não existe na lista';
}
