<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 12.10.2015
 * Time: 20:18
 */
require_once __DIR__ . '/models/news.php';

if(!empty($_GET)) {
    if(isset($_GET['id'])) {
        $news = getArticleByID('2');
        if (!empty($news)) {
            include 'view/index.php';
        }
    }
} else {
    header('Location:/404.php');
}


