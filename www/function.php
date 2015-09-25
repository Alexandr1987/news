<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 24.09.2015
 * Time: 21:19
 */
function File_upload($field){
    if (empty($_FILES))
        return false;
    if (0 != $_FILES[$field]['error'])
        return false;
    if (is_uploaded_file($_FILES[$field]['tmp_name']))
        move_uploaded_file($_FILES[$field]['tmp_name'],
            __DIR__.'/../news/'. $_FILES[$field]['name']);
    return $rec = basename($_FILES[$field]['name']);

}
