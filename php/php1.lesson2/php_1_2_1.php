<html>
<body>
<h3>
    Логические функции "И" "ИЛИ" "Исключающее ИЛИ"
</h3>
<?php
function andand($x, $y)
{
    return $x && $y;
}
?>
    <table border="1">
        <caption>Таблица истинности функции И</caption>
        <tr>
            <th>a</th>
            <th>b</th>
            <th>a & b</th>

        </tr>
        <tr><td>0</td><td>0</td>
            <td>
                <?php
                echo (int)andand(false, false);
                ?>
            </td></tr>
        <tr><td>0</td><td>1</td>
            <td>
                <?php
                echo (int)andand(false, true);
                ?>
            </td></tr>
        <tr><td>1</td><td>0</td>
            <td>
                <?php
                echo (int)andand(true, false);
                ?>
            </td></tr>
        <tr><td>1</td><td>1</td>
            <td>
                <?php
                echo (int)andand(true, true);
                ?>
            </td></tr>
    </table>
<?php
function oror($x, $y)
{
    return $x || $y;
}
?>
<table border="1">
    <caption>Таблица истинности функции ИЛИ</caption>
    <tr>
        <th>a</th>
        <th>b</th>
        <th>a || b</th>

    </tr>
    <tr><td>0</td><td>0</td>
        <td>
            <?php
            echo (int)oror(false, false);
            ?>
        </td></tr>
    <tr><td>0</td><td>1</td>
        <td>
            <?php
            echo (int)oror(false, true);
            ?>
        </td></tr>
    <tr><td>1</td><td>0</td>
        <td>
            <?php
            echo (int)oror(true, false);
            ?>
        </td></tr>
    <tr><td>1</td><td>1</td>
        <td>
            <?php
            echo (int)oror(true, true);
            ?>
        </td></tr>
  </table>
<?php
function xorxor($x, $y)
{
    return $x XOR $y;
}
?>
<table border="1">
    <caption>Таблица истинности функции Исключающее ИЛИ</caption>
    <tr>
        <th>a</th>
        <th>b</th>
        <th>a XOR b</th>

    </tr>
    <tr><td>0</td><td>0</td>
        <td>
            <?php
            echo (int)xorxor(false, false);
            ?>
        </td></tr>
    <tr><td>0</td><td>1</td>
        <td>
            <?php
            echo (int)xorxor(false, true);
            ?>
        </td></tr>
    <tr><td>1</td><td>0</td>
        <td>
            <?php
            echo (int)xorxor(true, false);
            ?>
        </td></tr>
    <tr><td>1</td><td>1</td>
        <td>
            <?php
            echo (int)xorxor(true, true);
            ?>
        </td></tr>
</table>
</body>
</html>