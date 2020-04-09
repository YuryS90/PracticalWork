<?php
header("Content-Type: text/plain");
$html = file("https://www.php.net/");
foreach ($html as $key => $value) {
    echo $key . '|' . $value;
}
