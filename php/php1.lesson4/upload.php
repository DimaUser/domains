<?php
var_dump($_FILES);
$nameFile = $_FILES['myimage'] ['name'];
if (isset($_FILES['myimage'])) {//проверяем наличие файла
    if (0== $_FILES['myimage'] ['error']) {//проверяем отсутствие ошибок
        move_uploaded_file(//перемещаем загруженный файл
            $_FILES['myimage'] ['tmp_name'],//
            __DIR__ . '/images/' . $nameFile//указываем полный путь до файла и его новое имя
        );
    }

}