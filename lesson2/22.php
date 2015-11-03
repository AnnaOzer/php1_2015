<?php

// модификаторы доступа - у свойств, методов
// public
// private не наследуется
// protected наследуется

// сделаем свойство protected, сломается вывод, свойство защищенное fatal error

// можем делать доступ к свойствам с помощью public метода

class Article
{
    // заменили private на protected
    protected $title;
    protected $text;
    
    public function __construct($title='', $text='') {
        $this->title = $title;
        $this->text = $text;
        
    }
    public function getTextCount()
    {
        return strlen($this->text);
    }
    
    // вот сюда добавим public метод
    
    public function getTitle()
    {
        return $this->title;
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

$art = new RepostArticle('ДА! Супер новость!', 'Текст новости', 'BBC');
$art->source = 'BBC';

?>

<article>
        <!--сломается вывод, свойство защищенное-->
        <header><?=$art->getTitle(); ?></header>
       <div>
       <?//=$art->text; ?>
       </div>
        <div>Источник: <?=$art->source; ?></div>
        
        <p>Число знаков: <?=$art->getTextCount(); ?></p>
    </article>


