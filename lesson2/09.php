<?php

// если пишем не title, а сложное выражение, возможны фигурные скобки


class Article
{
    public $title;
    public $text;
}


$art = new Article;
// вот здесь
$art->{title} = 'Важная новость!';
$art->text = 'Очень важный текст';

?>
    <article>
        <header><?=$art->title; ?></header>
        <div><?=$art->text; ?></div>
    </article>

