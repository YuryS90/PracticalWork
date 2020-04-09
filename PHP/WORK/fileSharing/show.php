<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Sharing</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <ul>
        <?php
        $arrFile = scandir("file\\"); 
        $file = "file\\";

        foreach ($arrFile as $value) {

            if ($value != '.' && $value != '..') { 
                if (is_dir($file . '/' . $value)) { 
                    echo "<li>" .
                    "<img src='images/folder.png' width='16' height='16'>" .

                    "<a href='file\\$value'>$value</a>" .

                    "<a href='delDir.php?file=$value'>" .
                    "<img src='images/bin.png' width='12' height='12'>" .
                    "</a>" .
                    "</li>";
                } else {
                    switch (explode(".", $value)[1]) { 
                        case 'docx':
                            $icon = 'doc.png';
                            break;
                        case 'pdf':
                            $icon = 'pdf.png';
                            break;
                        case 'csv':
                            $icon = 'csv.png';
                            break;
                        case 'txt':
                            $icon = 'txt.png';
                            break;
                        default:
                            $icon = 'jpg.png';
                            break;
                    }

                    $filesize = round((filesize("file\\$value")  / 1024) / 1024 , 3); // расчёт Мб

                    echo "<li>" .
                        "<img src='images/$icon' width='16' height='16'>" . // соответствующему файлу своя картинка

                        "<a class='file' href='file\\$value'>$value</a>" . // скачиание файла

                        "<div class='size'>($filesize Mb)</div>" . // показываем количество Мб
                    
                        "<a href='delLink.php?file=$value'>" . // удаление файла
                        "<img src='images/bin.png' width='12' height='12'>" .
                        "</a>" . 

                        "<a href='renShow.php?file=$value'>" . // переименование
                        "<img src='images/pen.png' width='12' height='12'>" .
                        "</a>" . 

                        "<a href='editText.php?file=$value'>" . // ред. содержимого файла, только для txt, html, csv
                        "<img src='images/text.png' width='12' height='12'>" .
                        "</a>" .

                        "<a href='view.php?file=$value'>" . // просмотр файла
                        "<img src='images/eye.png' width='14' height='14'>" .
                        "</a>" .
                        "</li>";
                }
            }
        } // endforeach

        ?>
    </ul>

</body>

</html>