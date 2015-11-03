<?php

// применение phpdoc, пишешь /** и подставляются еще 2 строчки
// в них пишешь, что за тип у этого свойства - здесь написали string
// и зачем оно вообще нужно - пишем Заголовок новости
// такие комментарии называются phpdoc и очень помогают

class Article
{
    /**
     * @var string
     */
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
