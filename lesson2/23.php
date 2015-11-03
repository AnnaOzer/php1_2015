<?php

// модификаторы доступа 

class Article
{
    public $title;
    public $text;
    
    // создадим защищенное свойство
    protected $textCount;
    
    public function __construct($title='', $text='') {
        $this->title = $title;
        $this->text = $text;
        
        // в конструкторе посчитаем и запишем в защищенное свойство
        $this->textCount = strlen($this->text);
        
    }
    public function getTextCount()
    {
        // это свойство уже посчитано
        return $this->textCount;
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


