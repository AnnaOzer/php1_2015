<?php

// вывод свойств объекта
// свойство содержится внутри нашего объекта и мы к нему так вот обращаемся

class Article
{
    public $title;
    public $text;
}


$art = new Article;
$art->title = 'Важная новость!';
$art->text = 'Очень важный текст';
?>
<article>
    <header><?=$art->title; ?></header>
    <div><?=$art->text; ?></div>
</article>

<?php
/*
Важная новость!
Очень важный текст
*/