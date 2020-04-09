<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arrWords = file('banWords.txt');
    // print_r($arrWords);
    foreach ($arrWords as &$word) { // на массив $arrWords
        $word = trim($word);
    }
    $words = implode('|', $arrWords); // в регулярных выражениях '|' - это ветвление
    // print_r($arrWords);
    if (preg_match("/$words/ui", $_POST['filter'])) {
        echo "Плохо";
    } else {
        echo "nice";
    }

    

    ?>
</body>

</html>