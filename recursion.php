<?php

function countDown(int $i) : void
{
    echo $i, PHP_EOL;

    if ($i > 1) {
        countDown($i -1); // Рекурсивный случай
    }

    // Базовый случай
    return;
}

countDown(10);
