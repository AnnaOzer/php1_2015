<?php

// классы могут иметь конструкторы
// класс это метод
// который выполнится автоматически
// при создании объекта класса

class Article
{
    public $title;
    public $text;

    public function __construct($title, $text) {
        $this->title = $title;
        $this->text = $text;
    }
    public function view(){
        echo '<h1>' .$this->title . '</h1>';
        echo '<div>' .$this->text . '</div>';
    }
}

$art = new Article('Заголовок', 'Текст');
$art->view();

?>


