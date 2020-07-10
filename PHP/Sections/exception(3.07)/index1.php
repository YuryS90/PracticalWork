<?php

/**
 * @param float $x входной парметр
 * @return float
 * @throws Exception
 */


function inverse($x)
{
    if (!$x) {
        throw new Exception('Деление на ноль.');
    }
    return 1 / $x;
}

// echo inverse(0);

// echo "<br>";

// echo inverse(5);

try {
    echo inverse(0);
} catch (Exception $e) {
    echo 'Поймано исключение: ', $e->getMessage(), "\n";
} finally {
    echo 'Блок finally';
}
