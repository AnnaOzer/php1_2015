<?php

// допустимая, но неверная запись при задании свойств класса

class Article
{// вот здесь
    public $title, $text;

}


$art = new Article;
$art->title = 'Важная новость!';
$art->text = 'Очень важный текст';


$art->title ='Не очень супер';

?>
    <article>
        <header><?=$art->title; ?></header>
        <div><?=$art->text; ?></div>
    </article>

<?php
