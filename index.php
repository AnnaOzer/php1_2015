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

include 'view/index.php';
include 'view/addform.php';