<?php

// Напишите рекурсивную функцию для подсчета элементов в списке

/**
 * @param int[] $array
 * @return String
 */
function countArrayElements($array) : int
{
    if ($array === []) { // Базовый случай
        return 0;
    }

    return 1 + countArrayElements(array_slice($array, 1)); // Рекурсивный случай
}

echo countArrayElements([1,2,3,4]), PHP_EOL;
