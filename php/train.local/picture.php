<?php
$list = scandir(__DIR__ . '/images');
//var_dump($list);
$list = array_diff($list, ['.', '..']);
//var_dump($list);
foreach ($list as $img) {
    ?>

    <img src="/train.local/images/<?php echo $img; ?>">

    <?php
}
