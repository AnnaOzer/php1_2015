<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 10.10.2015
 * Time: 22:22
 */

require_once __DIR__ . '/../functions/db.php';

function News_getAll()
{
    return DBQuery("
        SELECT * FROM news
    ");
}