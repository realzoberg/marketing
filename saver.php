<?php

$file = 'marketing.txt';

file_put_contents($file, $_POST["data"], FILE_APPEND | LOCK_EX);

?>
