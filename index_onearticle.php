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
        $news = getArticleByID($_GET['id']);
        if (!empty($news)) {
            include 'view/index.php';
        } else {
            header('Location:/404.php');
        }
    }  else {
        header('Location:/index.php.php');
    }
} else {
    header('Location:/index.php.php');
}
?>
<a href="/index.php">К списку всех новостей</a>
