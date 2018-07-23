<html>
<body>
<h1>Урок 1 домашнее задание</h1>
   
<p>3 Функция var_dump</p>
<?php
	var_dump(3/1);
	var_dump(1/3);
	var_dump('20cats'+40);
	var_dump(18%4);
?>

<p>4 Выражния</p>	
<?php
echo ($a = 2);
$x = ($y = 12) - 8; 
echo $x;
?>	
<p>переменной $a присвоено значение 2, переменная $x равна $y минус 8, а $y равен  12</p>
<p> 5 логический (boolean) тип, имеющий два значения - true (истина) и false (ложь)</p>
<?php
echo 1 == 1.0;
var_dump (1 == 1.0);
echo 1 === 1.0; //значение "0" не выводит//
var_dump (1 === 1.0);
var_dump ('02' == 2);
var_dump ('02' === 2);
var_dump ('02' == '2');
?>
<p>6 $x = true xor true;</p>
<?php
$x = true xor true;
var_dump($x);
$x = (true xor true);
var_dump($x);
?>	
<p>если пишнм без скобок, то переменной $x присваивается только true.
А со скобками присваивает все выражение и принимиает false (исключающее или)</p>
</body>
</html>

