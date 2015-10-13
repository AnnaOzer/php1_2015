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

function publishArticle($article)
{
    $res = DBExec('
    INSERT INTO `news`(`title`, `text`, `created`) VALUES (\''. $article['title'] .'\', \''. $article['text'] . '\', NOW())
    ');

    return $res;
}

function getArticleByID($id)
{
    return DBQuery ('
        SELECT * FROM `news` WHERE (`id`= \'' . $id . '\')
    ');
}