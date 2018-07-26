<html>
<body>
<h3>
    Логические функции "И" "ИЛИ" "Исключающее ИЛИ"
</h3>
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
                echo (int)(false && false);
                ?>
            </td></tr>
        <tr><td>0</td><td>1</td>
            <td>
                <?php
                echo (int)(false && true);
                ?>
            </td></tr>
        <tr><td>1</td><td>0</td>
            <td>
                <?php
                echo (int)(true && false);
                ?>
            </td></tr>
        <tr><td>1</td><td>1</td>
            <td>
                <?php
                echo (int)(true && true);
                ?>
            </td></tr>
    </table>
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
            echo (int)(false || false);
            ?>
        </td></tr>
    <tr><td>0</td><td>1</td>
        <td>
            <?php
            echo (int)(false || true);
            ?>
        </td></tr>
    <tr><td>1</td><td>0</td>
        <td>
            <?php
            echo (int)(true || false);
            ?>
        </td></tr>
    <tr><td>1</td><td>1</td>
        <td>
            <?php
            echo (int)(true || true);
            ?>
        </td></tr>
  </table>
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
            echo (int)(false XOR false);
            ?>
        </td></tr>
    <tr><td>0</td><td>1</td>
        <td>
            <?php
            echo (int)(false XOR true);
            ?>
        </td></tr>
    <tr><td>1</td><td>0</td>
        <td>
            <?php
            echo (int)(true XOR false);
            ?>
        </td></tr>
    <tr><td>1</td><td>1</td>
        <td>
            <?php
            echo (int)(true XOR true);
            ?>
        </td></tr>
</table>
</body>
</html>