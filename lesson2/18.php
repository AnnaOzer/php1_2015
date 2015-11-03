<?php

// наследование
// конструктор дочернего класса переопределяет конструктор, полученный от родительского класса

class Article
{
    public $title;
    public $text;
    
    // задавать значения свойств при создании объекта нобязательно
    public function __construct($title='', $text='') {
        $this->title = $title;
        $this->text = $text;
        echo 'Создана новость на ' . $this->getTextCount() . ' знаков.';
    }
    public function getTextCount()
    {
        return strlen($this->text);
    }
}

class RepostArticle
    extends Article
{
    public $source;
    
    // полностью перекроет определение конструктора из родительского класса
    public function __construct($title, $text, $source)
    {
        $this->title = $title;
        $this->text = $text;
        $this->source = $source;
    }
    
}

$art = new RepostArticle('Супер новость!', 'Текст новости');
$art->source = 'BBC';

?>

<article>
        <header><?=$art->title; ?></header>
        <div><?=$art->text; ?></div>
        <div>Источник: <?=$art->source; ?></div>
        
        <p>Число знаков: <?=$art->getTextCount(); ?></p>
    </article>


