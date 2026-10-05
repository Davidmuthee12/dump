<?php
$myfile = fopen("webdictionary.txt", "r") or die("Error: Unable to open file!");
echo fread($myfile, filesize("webdictionary.txt")) . "<br>";
// fgets() reads a single line from a file
echo fgets($myfile) . "<br>";
fclose($myfile);
?>