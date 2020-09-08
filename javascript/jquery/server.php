<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

if (($_POST['login'] == "123") && ($_POST['password'] == "456")) {
    echo json_encode(["response"=>"Yes"]);
} else {
    echo json_encode(["response"=>"No!"]);
}
