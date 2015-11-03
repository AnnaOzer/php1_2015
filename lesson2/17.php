<?php

// наследование
// возможность создать некий дочерний класс
// extends - наследуется от
// parent - ссылка на родительский класс

class Article {
    public $title;
    public $text;
}

class NewsArticle extends Article {
    public $source;
}

class RepostArticle extends Article {
    public $source;
    public function __construct() {
        parent::__construct();
    }
}


