<html>
<head>Тренировка</head>
<body>
<h1>Тренировка</h1>
<p>Абзац</p>
<h5>Echo вывод результата подсчета 2*2</h5>
<?php
echo 2*2
?>
<h5>Переменные их задание</h5>
<?php
$a = 1;
$b = 2;
echo $a+$b;
$c='строка';
var_dump($c);
$d = $a+$b;
var_dump($d)
?>
<h5>Логические функции a%b выводит <br> остаток после деления(целое число)</h5>
<?php
echo (10 % 3);
echo (9 % 3);
echo (8 % 3);
echo (7 % 3);
echo (4.6 % 3);
?>
<h5>Операторы сравнения $a <=> $b</h5>
<?php
$e=10;
$f=5;
var_dump($e <=> $f);
echo ($e <=> $f);
?>
<?php
function andand($x, $y)
{
    if ($x>$y) {
        return $y;
    }
    if ($x=$y) {
        return $x;
    }
    if ($x<$y) {
        return $x;
    }
}
echo andand (0,0);
echo andand (0,1);
echo andand (1,0);
echo andand (1,1);
?>
<h5></h5>
</body>
</html>
