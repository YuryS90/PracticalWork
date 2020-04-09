<?php // страница будет работаь в любом случае
if (!headers_sent()) {
    header('Location: https://www.php.net');
    exit;
}
echo 123;
?>