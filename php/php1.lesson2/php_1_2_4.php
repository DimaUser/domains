<html>
<body>
<h3>
Составим функцию определяющую пол человека по его имени.
</h3>
<?php
//Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол,
//пытаясь угадать по имени (null - если угадать не удалось). Вам придется самостоятельно
//найти нужные вам строковые функции. Начните с написания тестов для функции.
assert ('Мужчина' == pol('Максим'));
assert ('Женщина' == pol('Светлана'));
function pol($name)
{
    $last = substr($name, -2);//определяем последнюю букву в имени
    if ($last == 'а' || $last == 'я') {//примем гласные для женских имен
        return 'Женщина';
    } elseif ($last == 'б'|| $last == 'в' || $last == 'й' || $last == 'л' || $last == 'м' || $last == 'н' || $last == 'р') {//примем согласные для мужских имен
        return 'Мужчина';
    } else {
        return null;//для оставшихся букв выведет null
    }
}
$name='Виктория';
$pol = pol($name);
echo $name; ?><br><?php
echo $pol;
?>
</body>
</html>
