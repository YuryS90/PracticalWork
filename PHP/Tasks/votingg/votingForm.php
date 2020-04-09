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
    <div class="container">
    
        <form action="votingResult.php" method="post">

            <?php
            include('config.php');
            $arr = file($fileName); // получили массив строк: [0]=>What games do you like? [1]=>CSGO - 1 т.д
            // print_r($arr) // для просмотра полученного массива
            ?>

            <h2><?= $arr[0] ?></h2><!--сокращённая форма записи (echo), в которой вызываем [0]=>What games do you like? -->
            <div class="input">

                <? // $i = 1 - это начинаем перебирать с [1] до последней строки массива
                for ($i = 1; $i < count($arr); $i++) { // перебираем элементы (строки) массива, т.е 1-й элемент (строка) - CSGO - 4; 2-й Dota2 - 1 и тд
                    // $buf = explode(" - ", $arr[$i]); можно так
                    // echo $buf[0]. "<br>"; // достали [0] элемент
                    $str = explode(" - ", $arr[$i]);//После разбивки строки, получаем такой массив [0]=> CSGO [1]=> 4
                    $buf = $str[0]; // Берём только нулые элементы [0]=> CSGO [0]=> dota2 и тд и заносим в $buf
                    echo "<div class = 'radio'><lable><input type = 'radio' name = 'vot' value = '$i'>$buf</lable><br>\n</div>";
                }
                ?>

            </div>
            <input class="submit" type="submit" value="VOTE">
        </form>
    </div>
</body>

</html>