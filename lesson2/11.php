<?php

// создание нового объекта:
// - класса целое число
// - класса Article
// - создание еще одного объекта класса Article

class Article
{
    public $title;
    public $text;
}

// создание нового объекта класса целое число
$a = 1;

// создание нового объекта класса Article
$art = new Article;

// два раза обратились к созданному объекту
$art->title = 'Важная новость!';
$art->text = 'Очень важный текст';

// создание еще одного объекта класса Article
$art1 = new Article;
$art1->title = '1';
$art1->text = '11';

?>
    <article>
        <header><?=$art->title; ?></header>
        <div><?=$art->text; ?></div>
    </article>

