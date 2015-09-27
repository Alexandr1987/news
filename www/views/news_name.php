<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>new_news</title>
    <?php require __DIR__.'/../function.php';?>
    <?php require __DIR__.'/../modules/sql.php';?>
</head>
<body>
<?php $id = get_id();?>
<?php $newses = get_sql();?>
<?php foreach ($newses as $key => $value):?>
    <?php if ($id == $value['id']):?>
        <h2><?php echo $value['title'];?></h2>
        <p><?php echo $value['text'];?></p>
        <p><?php echo $value['date'];?></p>
    <?php endif; ?>

<?php endforeach; ?>
</body>
</html>





