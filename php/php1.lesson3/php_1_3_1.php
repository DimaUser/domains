<html>
<body>
<h3>
    Напишите программу-калькулятор
    Форма для ввода двух чисел, выбора знака операции и кнопка "равно"
    Данные пусть передаются методом GET из формы (да, можно и так!) на скрипт,
    который их примет     и выведет выражение и его результат
    * Попробуйте улучшить программу. Пусть данные отправляются на ту же страницу на PHP,
    введенные числа останутся в input-ах, а результат появится после кнопки "равно"
</h3>
<form action="/php_1_3_1.php" method="get">
    Первое число: <input type="text" name="a" placeholder="
<?php
    echo $a=(float)$_GET['a']//вывод ранее введенных значений
?>
">
       <select size="5" multiple name="deistvie">
        <option disabled>Выберите действие</option>
        <option selected value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
     Второе Число: <input type="text" name="b" placeholder="
<?php
    echo $b=(float)$_GET['b']//вывод ранее введенных значений
    ?>
">
    <button type="submit">равно</button>
    <?php
    // Учесть деление на 0 и не заполненные числа
     $a=(float)$_GET['a'];//берем из массива первое число (обязательно в ковычках иначе воспримет как константу)
     $b=(float)$_GET['b'];//берем из массива второе число (обязательно в ковычках иначе воспримет как константу)
   // var_dump($a);
   // var_dump($b);
     function kalkulyator($a,$b)//функция выполняющая операцию в зависимости от значения 'deistvie' в массиве GET
    {
        if ($_GET['deistvie']=='+') //(обязательно в ковычках иначе воспримет как константу)
        {
            return ($a+$b);}
        elseif ($_GET['deistvie']=='-'){
            return ($a-$b);
        }
        elseif($_GET['deistvie']=='*'){
            return ($a*$b);
        }
        elseif(($_GET['deistvie']=='/')&&$b!=0){
            return ($a/$b);
        }
        elseif(($_GET['deistvie']=='/')&&$b==0){
            return 'Делить на ноль нельзя!';//выведет при делении на 0
        }
        else{
            return 'Выберете действие и нажмите равно';//если не выбрана операция выведет текст 'Выберете действие'
        }
    }
    echo kalkulyator($a,$b);
    ?>
</form>
<?php
//var_dump($_GET);//вывод значений массива GET
?>
<br>
<?php
//var_dump(kalkulyator($a,$b));
?>
<br>
<?php

?>
<br>
</body>
</html>