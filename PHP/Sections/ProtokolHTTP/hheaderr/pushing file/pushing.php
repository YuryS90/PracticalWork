<?php
header('Content-type: application/pdf');

header('Content-Disposition: attachment; filename="spawn.pdf"');

readfile('file.pdf');
?>