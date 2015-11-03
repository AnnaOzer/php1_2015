<?php

// напишем конструктор

class Article
{
    public $title;
    public $text;

    public function __construct($title, $text) {
        $this->title = $title;
        $this->text = $text;
    }
    public function getTextCount()
    {
        return strlen($this->text);
    }
}

$art = new Article('Супер новость', 'Важный текст');


?>

<article>
        <header><?=$art->title; ?></header>
        <div><?=$art->text; ?></div>

        <!--вызовем метод-->
        <p>Число знаков: <?=$art->getTextCount(); ?></p>
    </article>


