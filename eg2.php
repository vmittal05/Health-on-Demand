<?php
$ar=array();
$i=0;
$file = fopen("test.txt", "r") or die("Unable to open file!");
$file_lines = file('test.txt');
foreach ($file_lines as $line) {
    $ar[$i]=$line;
    $i++;
}
fclose($file);
$arrlength = count($ar);
for($x = 0; $x < $arrlength; $x++) {
    echo $ar[$x];
    echo "<br>";
}
?>