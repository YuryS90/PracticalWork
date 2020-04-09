<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black;
        }

    </style>
</head>

<body>
    <?php
    $arr = array(
        1 => "Ivanov",
        2 => "Petrov",
        3 => "Sidor",
        10 => "Somov",
    );

    function tablica($arr)
    {
        $str = "<table>\n";
        foreach ($arr as $key => $value) {
            $str .= "\t<tr>\n\t\t<td>$key</td>\n\t\t<td>$value</td>\n\t</tr>\n";
        }
        $str .= "</table>";
        return $str;

    }
    echo tablica($arr);
    ?>
</body>

</html>