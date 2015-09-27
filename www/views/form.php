<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
</head>
<body>
<form action="../controler/add.php" method="POST">
    Имя файла: <input type="text" name="title_news">
    Отправить этот файл: <textarea name="text_news" style="width:300px;height:100px;"></textarea>
    <input type="submit" value="Добавить файл" name="submit"/>

</form>
</body>
</html>