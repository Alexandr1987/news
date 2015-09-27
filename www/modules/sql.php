<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 26.09.2015
 * Time: 12:17
 */

function sql_connect(){
    mysql_connect('localhost','root','');
    mysql_select_db('news');
};





function get_sql()
{   sql_connect();
    $result = mysql_query('SELECT * FROM new_news ORDER BY date ASC');
    $newses = [];
    while ($row = mysql_fetch_assoc($result))
        $newses[] = $row;
    return $newses;
}



//Записываем имя файла в базу данных

function rec($name,$text)
{
    sql_connect();
    mysql_query("INSERT INTO new_news(title, text, date) VALUES ('" . $name . "','" . $text . "',NOW())");
}
/*

if (!empty($_POST)) {
    $data = [];
    if (!empty($_POST['title'])) {
        $data['title'] = $_POST['title'];
    }
    if (!empty($_FILES)) {
        $data['image'] = File_upload('image');

    }
    if (isset($data['title']) && isset($data['image']))
        Photo_insert($data);

    header('location: /');
    die;
}


function Photo_insert($data){
    $sql = "INSERT INTO images(title, path) VALUES ('".$data['title']."','".$data['image']."')";

    sql_exec($sql);
}

*/