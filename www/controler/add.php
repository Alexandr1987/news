<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 26.09.2015
 * Time: 22:38
 */
require __DIR__.'/../function.php';
//news_upload($name,$text);
require __DIR__.'/../modules/sql.php';

$name = $_POST['title_news'];
$text = $_POST['text_news'];
$date = date("F j, Y, g:i a");
rec($name,$text);

header('location: ../views/index.php');