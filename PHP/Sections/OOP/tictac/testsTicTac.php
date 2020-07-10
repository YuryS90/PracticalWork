<?php
include 'autoload.php'; // для того чтобы могли использовать классы, которые лежат в htmlTag

/**
 * более простой тестик
 */
// function test($arr1, $arr2, $text = '')
// {
//     if ($arr1 === $arr2) {
//         echo "Тест $text пройден\n";
//     } else {
//         echo "Тест $text не пройден\n . $arr1!=$arr2\n";
//     }
//     // print_r($arr2);
// }

function test($expected, $actual, $text = '')
{
    if ($expected === $actual) {
        echo "\033[32m";   // Red Color
        echo "Тест $text пройден\n";
        echo "\033[37m";

    } else {
        echo "\033[31m";   // Red Color
        echo "Тест $text не пройден\n";
        echo "\033[37m";

        echo "expected:\n";
        print_r($expected);
        echo "\n";

        echo "actual:\n";
        print_r($actual);
        echo "\n";

    }
}
//======================================================================

$tictac = new TicTac();

// №1
// test(
//     [
//         [null, null, null],
//         [null, null, null],
//         [null, null, null]
//     ],
//     $tictac->getMap(),
//     "TicTac"
// );


// echo "\n<br>\n";

// №2
test(
    [
        [1, null, null],
        [null, null, null],
        [null, 0, null]
    ],
    $tictac
        ->putCross(0, 0)
        ->putNull(2, 1)
        ->getMap(),
    "TicTac"
);


//№3
test(
    [
        [0, 0, 0],
        [null, 1, null],
        [null, null, 1]
    ],
    $tictac
        ->initMap(3) // обнулили карту
        ->putNull(0, 0)
        ->putCross(1, 1)
        ->putNull(0, 1)
        ->putCross(2, 2)
        ->putNull(0, 2)
        ->getMap(),
    "TicTac"
);


//№4.1
test(
    0, // 0 должен вернуть метод ChecWin, если выиграли нолики
    $tictac
        ->initMap(3) // генерируем новую карту, состояющую 3х3
        ->putNull(0, 0)
        ->putCross(1, 1)
        ->putNull(0, 1)
        ->putCross(2, 2)
        ->putNull(0, 2)
        ->checWin(), // сообщает выиграл нолик или нет
    "T-TacWinRow_0Zero"
);

//№4.2
test(
    1,
    $tictac
        ->initMap(3)
        ->putCross(0, 0)
        ->putNull(1, 1)
        ->putCross(0, 1)
        ->putNull(2, 2)
        ->putCross(0, 2)
        ->checWin(),
    "T-TacWinRow_0Cross"
);

// победа крестика по третьей строке 
test(
    1,
    $tictac
        ->initMap(3)
        ->putCross(2, 0)
        ->putNull(1, 1)
        ->putCross(2, 1)
        ->putNull(1, 0)
        ->putCross(2, 2)
        ->checWin(),
    "T-TacWinRow_2Cross"
);

// по нулевому столбцу крестик
test(
    1,
    $tictac
        ->initMap(3)
        ->putCross(0, 0)
        ->putNull(1, 1)
        ->putCross(1, 0)
        ->putNull(1, 2)
        ->putCross(2, 0)
        ->checWin(),
    "T-TacWinCol_0Cross"
);

// по второму столбцу нолик
test(
    0,
    $tictac
        ->initMap(3)
        ->putNull(0, 2)
        ->putCross(1, 1)
        ->putNull(1, 2)
        ->putCross(0, 1)
        ->putNull(2, 2)
        ->checWin(),
    "T-TacWinCol_2Null"
);
