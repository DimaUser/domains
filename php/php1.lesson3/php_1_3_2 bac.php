<html>
<body>
<h3>
    Создайте примитивную фотогалерею из двух страниц
    Пусть на главной странице галереи выводятся 3-4 изображения
    Каждое из них пусть будет ссылкой вида /image.php?id=42, где 42 - условный номер изображения
    На странице image.php вы по номеру понимаете, какое изображение вывести в браузер
    и выводите его. Я ожидаю, что для этого пункта программы вы создатите массив вида
    [1 => 'cat.jpg', 2=>'dog.jpg', ... ], однако вы можете предложить и другое решение.
    Кстати, этот же массив вы используете и в пункте 1 - для вывода изображений!
</h3><br>
<p><a href="/image.php?id=1"><img src="images/cat.jpg"
                                  width="400" height="266" alt="cat"></a>
    CAT</p>
<p><a href="/image.php?id=2"><img src="images/enot.jpg"
                                  width="400" height="266" alt="enot"></a>
    ENOT</p>
<p><a href="/image.php?id=3"><img src="images/fox.jpg"
                                  width="400" height="266" alt="fox"></a>
    FOX</p>
<p><a href="/image.php?id=4"><img src="images/tiger.jpg"
                                  width="400" height="266" alt="tiger"></a>
    TIGER</p>

<?php
$image=[1=>'cat.jpg',2=>'enot.jpg',3=>'fox.jpg',4=>'tiger.jpg'];
var_dump($image);
?>

<?php
        foreach ($image as $a){
            echo '<p><a href="/image.php?id=1"><img src="images/';
			echo $a; 
			echo '" width="400" height="266" alt="cat"></a>CAT</p>';
        }
?>

<?php
foreach ($image as $a){
    echo $a;
}
?>
<br>
</body>
</html>