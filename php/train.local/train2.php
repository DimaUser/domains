<?php
//echo __DIR__.'/test.txt';
$fh=fopen(__DIR__.'/test.txt','r');//открывает файл с режимом r
$line=fgets($fh);//Читает одну строчку из файла
echo $line;
fclose($fh);//закрывает файл
