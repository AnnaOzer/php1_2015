<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 13.10.2015
 * Time: 19:53
 */

require_once __DIR__ . '/models/news.php';

if(!empty($_GET)) {
    if(isset($_GET['id'])) {
        $news = getArticleByID($_GET['id']);
        $toedit = $news[0];

        if (!empty($toedit)) {


            include 'view/editform.php';
        } else {
            header('Location:/404.php');
        }
    }  else {
        header('Location:/index.php');
    }
} else {
    header('Location:/index.php');
}
?>
<a href="/index.php">К списку всех новостей</a>