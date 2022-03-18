<?php
$myfile=fopen("newfile.txt","w") or die ("unable to open file");
$txt="Jhon doe\n";
fwrite($myfile,$txt);
$txt="Jane dow\n";
fwrite($myfile,$txt);
fclose($myfile);
?>
