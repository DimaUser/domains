<p><a href="/php1.lesson4/index.php">Назад</a></p>
<?php
$list = scandir(__DIR__ . '/images');
//var_dump($list);
$list = array_diff($list, ['.', '..']);
//var_dump($list);
foreach ($list as $img) {
    ?>

    <img src="/php1.lesson4/images/<?php echo $img; ?>">

    <?php
}
