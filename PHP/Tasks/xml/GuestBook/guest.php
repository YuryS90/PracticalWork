<?php

include "fun_guest_book.php";


save_guest_book("book.xml", $_POST['mess'], $_POST['name'], date('d-m-y h:i:s'));

echo "<pre>";
print_r(read_guest_book("book.xml"));