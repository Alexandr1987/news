<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 24.09.2015
 * Time: 21:19
 */

$name =$_POST['title_news'];
$text = $_POST['text_news'];
/*
function news_upload($name,$text){
    if (empty($name))
        return false;
    if (empty($text))
        return false;
    if ( file_put_contents($name, $text)== true)
        rename($name, '../text/'.$name);

}
*/
function get_id()
{
    if (isset($_GET['id'])) {
        $id = (int)$_GET['id'];
    }
return $id;
}
