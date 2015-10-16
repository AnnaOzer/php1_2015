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
        $article = getArticleByID($_GET['id']);
        if (!empty($article)) {
            ?>Новость:<?php
            include 'view/index_one.php';
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

