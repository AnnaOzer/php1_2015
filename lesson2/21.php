<?php

// наследование
// вызов переопределенного метода предка


class Article
{
    public $title;
    public $text;
    
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
    }
    
    public function getTextCount()
    {
        echo 'Старое значение было бы: ';
        echo parent::getTextCount();
        echo '<br>';
        return 42;
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


