<?php
$file = basename($_SEVER["PHP_SELF"],".php");
$fp = fopen($file . ".php", "r")
        or exit("file: $file.php open error<br/>");


echo "file: $file.php open successful<br/>";
echo "file size:" . filesize($file . ".php") . "<br/>";
fclose($fp);
echo "file: $file.php has been closed <br/>";
