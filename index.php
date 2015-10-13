<?php

/*
 * $news = [
    [
        'title'=>'Первая новость',
        'text'=>'В лесу родилась ёлочка,',
    ],
    [
        'title'=>'Вторая новость',
        'text'=>'В лесу она росла...',
    ],
];

 * */

require_once __DIR__ . '/models/news.php';
$news = News_getAll();
?>
<h1>Все главные новости</h1>
<a href="index_adder.php">Добавить еще новость</a>
<?php
include 'view/index.php';
include 'view/showoneform.php';