<?php

// создание нового объекта:
// класса целое число
// класса Article

class Article
{
    public $title;
    public $text;
}

// создание нового объекта класса целое число
$a = 1;

// создание нового объекта класса Article
$art = new Article;

$art->title = 'Важная новость!';
$art->text = 'Очень важный текст';

?>
    <article>
        <header><?=$art->title; ?></header>
        <div><?=$art->text; ?></div>
    </article>

