<?php

// создание объекта класса Article

class Article {
    public $title;
    public $text;
}
$art = new Article;

var_dump($art);
// object(Article)#1 (2) { ["title"]=> NULL ["text"]=> NULL }
// у объекта два свойства, им ничего не присвоили
