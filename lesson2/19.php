<?php

// наследование
// вызов конструктора родительского класса
// из конструктора дочернего класса
// parent::__construct

class Article
{
    public $title;
    public $text;
    
    // задавать значения свойств при создании объекта нобязательно
    public function __construct($title='', $text='') {
        $this->title = $title;
        $this->text = $text;
        
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
       
    public function __construct($title, $text, $source)
    {
        $this->source = $source;
        parent::__construct($title, $text);
        /*
        или в таком порядке, то же самое
        parent::__construct($title, $text);
        $this->source = $source;
        */
    }
    
}

$art = new RepostArticle('Супер новость!', 'Текст новости', 'BBC');
$art->source = 'BBC';

?>

<article>
        <header><?=$art->title; ?></header>
        <div><?=$art->text; ?></div>
        <div>Источник: <?=$art->source; ?></div>
        
        <p>Число знаков: <?=$art->getTextCount(); ?></p>
    </article>


