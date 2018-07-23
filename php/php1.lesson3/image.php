<html>
<body>
<?php
//var_dump($_GET);
?>
<br>
<img src="images/
<?php
switch ($_GET['id']) {//вывод соответствующего рисунка по значению массива GET
    case '1':
        echo 'cat.jpg';
        break;
    case '2':
        echo 'enot.jpg';
        break;
    case '3':
        echo 'fox.jpg';
        break;
    case '4':
        echo 'tiger.jpg';
        break;
}
?>" alt="альтернативный текст">
<br>
</body>
</html>