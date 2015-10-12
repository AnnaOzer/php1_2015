<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 12.10.2015
 * Time: 15:51
 */
/*
require_once __DIR__ .'/../models/news.php';
require_once __DIR__ .'/../functions/db.php';

$article = [
    'title' => 'Из теста',
    'text' => 'Текст из теста',
];

$texter = 'good small texter';

$sql = 'INSERT INTO news(title, text, created) VALUES (' . $article['title'] .' ,' . $article['text'] .', NOW())';
$sql2 ='INSERT INTO `news`(`id`, `title`, `text`, `created`) VALUES ([value-1],[value-2],[value-3],[value-4])';
$sql3 = "INSERT INTO news(title, text, created) VALUES ('mylove', 'vjrnji', NOW())";
$sql4 = '
  INSERT INTO `news`(`title`, `text`, `created`) VALUES (\''. $texter .'\', \''. $texter . '\', NOW())
';
$sql5 = '
  INSERT INTO `news`(`title`, `text`, `created`) VALUES (\''. $article['title'] .'\', \''. $article['text'] . '\', NOW())
';

var_dump(publishArticle($article));

var_dump(mysql_query($sql5));

var_dump(DBExec($sql5));
*/