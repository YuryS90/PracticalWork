<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php

    include('config.php');
    $arr = file($fileName);
    $ind = $_POST['vot']; // ind - номер строчки за которую проголосовали, например Dota2 - 2,
    // print_r($arr);
    $buf = explode(" - ", $arr[$ind]); // разбивает эту конкретную строку, где получается [0]=>Dota2 [1]=>2
    $buf[1] += 1; // было [1]=>2 стало [1]=>3
    $arr[$ind] = implode(" - ", $buf) . "\n";
    // print_r($arr);
    file_put_contents($fileName, $arr);

    ?>

    <?
    // находим общую сумму голосов, чтобы найти от него процент конкретного голоса
    $sum = 0;
    for ($i = 1; $i < count($arr); $i++) {
        $sum = $sum + explode(" - ", $arr[$i])[1];
    }
     //echo $sum;

    ?>

    <div class="container">
        <div class="main">

            <h2><?= $arr[0] ?></h2>

            <div class="result">

                <?
                for ($i = 1; $i < count($arr); $i++) {
                    $buf = explode(" - ", $arr[$i]);
                    $result = round(($buf[1] / $sum * 100), 2);
                    echo "$buf[0] - $result %<br><div class = 'line' style = 'width: {$result}px'></div><br> "; // $buf[0] - название игры, а $buf[1] - результат
                }
                ?>

            </div>

        </div>
    </div>
</body>

</html>