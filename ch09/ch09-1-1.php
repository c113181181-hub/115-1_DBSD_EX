<?php
require "about me.php";
echo"W11 Ex01<br/>";
echo "<HR>";

$file = basename($_SERVER['PHP_SELF'],".php");
$path = realpath($file.".php");
echo "real path:  $path <BR/>";

$part = pathinfo(($path));
echo "path:" . $part['dirname'] . "<BR/>";
echo"filename:" . $part['basename'] . "<BR/>";
echo"extension:" . $part['extension'] . "<HR/>";


if (file_exists($file . ".php")) {
    echo"file: $file.php exists <br/>";
}else{
    echo"file: $file.php does not exist <br/>";
}


if (!copy($file .".php",$file . ".bak")){
    echo "file: $file.php copy to bak failed <br/>";
}else{
    echo "file: $file.php copy to bak successful <br/>";
}


rename($file . ".bak", "test.txt");

$file = "test.txt";

unlink($file);
echo"file: $file has been deleted <br/>";