<?php

/**
 * @param int[] $array
 * @return String
 */
function sum($array) : int
{
    if ($array === []) { // Базовый случай
        return 0;
    }

    return $array[0] + sum(array_slice($array, 1)); // Рекурсивный случай
}

echo sum([1,2,3,4]), PHP_EOL;
