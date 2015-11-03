<?php

// можно все аргументы в конструкторе задать необязательными
// и при создании нового объекта не писать аргументов

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
// вот так создаем объект без аргументов
$art = new Article();


?>

<article>
        <header><?=$art->title; ?></header>
        <div><?=$art->text; ?></div>

        
        <p>Число знаков: <?=$art->getTextCount(); ?></p>
    </article>
    
<!-Создана новость на 0 знаков.->

