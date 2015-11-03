<?php

// свойству потом можно еще раз задать какое угодно значение

class Article
{
    public $title;
    public $text;
}


$art = new Article;
$art->title = 'Важная новость!';
$art->text = 'Очень важный текст';

// обращаемся к свойству объекта и задаем ему другое значение
$art->title ='Не очень супер';

?>
<article>
    <header><?=$art->title; ?></header>
    <div><?=$art->text; ?></div>
</article>

<?php
/*
Не очень супер
Очень важный текст
*/