<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body>


<?php
include_once __DIR__.'/../modules/sql.php';

 ?>
<?php $newses = get_sql();?>
<?php
    foreach ($newses as $key => $value):?>
        <?php

            $id = $value["id"];

        ?>
        <h2><?php echo $value["title"]; ?></h2><br>
        <p><?php echo $value["text"];?></p>
        <p><?php echo $value["date"];?></p>
        <a href="../views/news_name.php?id=<?=$id ?>">more</a>
<?php endforeach; ?>
<br>
<a href="/views/form.php">Добавить новость</a>
</body>
</html>