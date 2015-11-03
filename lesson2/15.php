<?php

// в конструкторе можно писать что угодно
// вообще же в конструкторе никто ничего не выводит

class Article
{
    public $title;
    public $text;

    public function __construct($title, $text) {
        $this->title = $title;
        $this->text = $text;
        echo 'Создана новость на ' . $this->getTextCount() . ' знаков.';
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


