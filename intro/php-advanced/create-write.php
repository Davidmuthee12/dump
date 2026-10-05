<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "kinuthia mbou\n";
fwrite($myfile, $txt);
$txt = "wanguku mbou\n";
fwrite($myfile, $txt);
fclose($myfile);
?>