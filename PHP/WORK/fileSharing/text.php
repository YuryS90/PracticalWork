<?php
file_put_contents('file/'.$_POST['file'], $_POST['text']);
// $_POST['text'] - это что изменилось
// file/'.$_POST['file'] - куда эти изменения записываем 

header("Location: show.php");
