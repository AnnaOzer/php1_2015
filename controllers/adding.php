<?php

require_once __DIR__ . '/../models/news.php';
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 12.10.2015
 * Time: 14:37
 */
$newArticle = [];

if(!empty($_POST)) {
    if(isset($_POST['text'])){
        $newArticle['text'] = $_POST['text'];
        $newArticle['title'] = isset($_POST['title']) ? $_POST['title'] : 'Новость';
        publishArticle($newArticle);

    }
}


header('Location:/index.php');