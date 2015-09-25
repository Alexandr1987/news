<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
</head>
<body>
<form action="add.php" enctype="multipart/form-data" method="POST">
    Имя файла: <input type="text" name="title_news">
    Отправить этот файл: <input name="text_news" type="file"/>
    <input type="submit" value="Добавить файл" name="submit"/>
</form>
</body>
</html>