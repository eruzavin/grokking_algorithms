<?php

// Найдите наибольшее число в списке

/**
 * @param int[] $array
 * @return int
 */
function findMaxElement($array) : int
{
    if (count($array) === 2) { // Базовый случай
        return max($array[0], $array[1]);
    }

    // рекурсия
    return max($array[0], findMaxElement(array_slice($array, 1)));
}

echo findMaxElement([1,7,2,3,4]), PHP_EOL;


/**
 * @param int[] $array
 * @return int
 */
function findMaxElement_v2($array) : int
{
    if ($array === []) { // Базовый случай
        return 0;
    }
    
    // Рекурсивный случай
    $recursiveResult = findMaxElement(array_slice($array, 1));
    if ($array[0] > $recursiveResult) {
        return $array[0];
    }
    
    return $recursiveResult;
}

//echo findMaxElement_v2([1,6,2,3,4]), PHP_EOL;



