<html>
<body>
<h3>урок 1</h3>

 <p>echo 3*2</p>
	<?php
	echo 3*2;
	?>
<p>var_dump 2*2</p>
	<?php
	var_dump(2*2);
	?>
<h3>Урок 2 </h3>
<br>
    <?php
    echo 2+'2'
    ?>
<br>
<?php
var_dump(
        (string)
        true
);
?>
<br>
<?php
$x=42;
$y=24;
if($x>$y){
    $max=$x;
}else{
    $max=$y;
}
echo $max;
?>
<br>
<?php
$color='green';
switch ($color){
    case 'red':
        echo 'Красный';
        break;
    case 'yellow':
        echo 'Желтый';
        break;
    case 'green':
        echo 'Зеленый';
        break;
    default:
        echo 'Неизвестный цвет';
        break;
}
?>
<h3>Урок 3 </h3>
<br>
<?php
$numbers=[1,2,3,'foo',true];
var_dump($numbers);
$numbers[]='bar';//добавляет знач в массив в конец
var_dump($numbers);//выводит массив
var_dump($numbers[0]);//выводит 0 элемент массива
?>
<br>
<?php
$numbers=[
        'jan'=>31,//задаем массив со своими индексами 'jan'
    'feb'=>28,
    'mar'=>31,
    ];
$numbers[]='bar';//добавляет знач в массив в конец
var_dump($numbers);
?>
<br>
<?php
$numbers=[
    'jan'=>31,
    'feb'=>28,
    'mar'=>31,
];
foreach ($numbers as $c){
    echo $c;//перебирает массив
}
?>
<br>
<?php
$days=[
    'jan'=>31,
    'feb'=>28,
    'mar'=>31,
];
foreach ($days as $month=>$count){
    echo $month;
    echo '=';
    echo $count;
    echo ';';//перебирает массив
}
?>
<br>
<?php
$x=[1,2,3];
$y=[3,4,5];
var_dump(array_merge($x,$y)); //соединяет массивы
var_dump(array_unique(array_merge($x,$y)));//оставляет уникальные значения
?>
<br>
<?php
var_dump(range(1,100));//массив от 1(нач знач) до 100(кон знач)
?>
<br>
<?php
$users=['Иванов','Петров','Сидоров'];
echo implode(', ',$users);//склеиват массив в строку используя указанный разделитель
?>
<br>
<?php
var_dump(explode(',','42,24,12'));//разбивает строку в массив используя указанный разделитель
?>
<br>
<?php
var_dump($_GET);//суперглобальный массив Get
?>
<br>
<?php
$news=[
        1=>'первая новость',
    2=>'вторая новость',
];
?>
<h2>
    <?php
    echo $news[$_GET['id']];// вывод необходимиго значения из массива по GET
    ?>
</h2>
<br>
<form action="/post.php" method="post">
Логин: <input type="text" name="login">
Пароль: <input type="password" name="password">
<button type="submit">Войти</button>
</form>
<h3>Урок 4 </h3>
<br>
<?php
$i=0;
while ($i<10){//Условие
$i=$i+1;//Тело цикла
echo $i;
}
echo 'Done';
?>
<br>
<?php
$i=0;
while (true){
    $i++;
    echo $i;
    if ($i>=10){
        break;//прерывает цикл по достижению условия $i>=10
    }
}
echo 'Done';
?>
<br>
<?php
$x='A';
$x++;
echo $x;//оператор инкримента применяют не только к числам но и к буквам выведет B
//после Z идет AA (работает только с латиницей) (-- уменьшает Дикримент)
?>
<br>
<?php
echo __DIR__.'/test.txt';
$fh=fopen(__DIR__.'/test.txt','r');//открывает файл с режимом r
$line=fgets($fh);//Читает одну строчку из файла до символа перевода строки, если не указано число байт чтения
echo $line;
$line=fgets($fh);//Читает одну строчку из файла(следующую)(запоминает положение символа перевода строки)
echo $line;
$line=fgets($fh);//Читает одну строчку из файла(следующую)(запоминает положение символа перевода строки)
echo $line;
fclose($fh);//закрывает файл
?>
<br>
<?php
$fh=fopen(__DIR__.'/test.txt','r');//открывает файл с режимом r
while (!feof($fh)){//!feof ф-ия пока не достигнут конец файла (цикл чтения файла по строкам)
    $line=fgets($fh);//Читает одну строчку из файла(следующую)(запоминает положение символа перевода строки)
    echo $line;
}
fclose($fh);//закрывает файл
?>
<br>
<?php
echo file_get_contents(__DIR__.'/test.txt');//выводит все(целиком) содержимое файла.
?>
<br>
<?php
$fh=file(__DIR__.'/test.txt');//открывает файл и построчно записывает его содержимое в массив.
var_dump($fh);
?>
<br>
<?php
readfile(__DIR__.'/test.txt');//выводит все содержимое файла в поток ("на экран")
?>
<br>
<?php
//$fh=fopen(__DIR__.'/test.txt','w');//открывает файл с режимом w
// (режим заменит старое содержимое или создаст новый если не существовал)
$fh=fopen(__DIR__.'/test.txt','a');//открывает файл с режимом a
fwrite($fh,"\n".'Привет!');//запись в файл строки 'Привет'
fclose($fh);//закрывает файл
?>
<br>
</body>
</html>