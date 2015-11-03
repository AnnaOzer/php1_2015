<?php

// напишем метод,
// который будет возвращать число знаков в тексте новости
// внизу метод вызовем

class Article
{
    public $title;
    public $text;

    // здесь пишем метод
    public function getTextCount()
    {
        return strlen($this->text);
    }
}

$art = new Article;
$art->title = 'Важная новость!';
$art->text = 'Очень важный текст';

?>
    <article>
        <header><?=$art->title; ?></header>
        <div><?=$art->text; ?></div>

        <!--вызовем метод-->
        <p>Число знаков: <?=$art->getTextCount(); ?></p>
    </article>

