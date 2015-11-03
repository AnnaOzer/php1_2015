<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 25.10.2015
 * Time: 11:21
 */

// описание класса новостная статья
// классы принято называть с большой буквы
class Article {
    /**
     * @var string Число с плавающей точкой
     */
    public $title; // свойство заголовок
    public $text;  // свойство текст статьи
    public function view(){ // выводит на экран текст статьи
        // $this псевдопеременная означает эта новость
        echo '<h1>' .$this->title . '</h1>';
        echo '<div>' .$this->text . '</div>';
    }
}
// как выводится класс вардампом
var_dump($art);

// создание объекта нужного класса
$art =  new Article;

var_dump($art);

// доллар ставится один раз
$art->title = 'Важная новость!';
$art->text = 'Очень важный текст';

// вызвать метод
$art->view();

var_dump($art);

$art->title = 'Супер новость!';

$art->view();
var_dump($art);

?>

<article>
    <header><h1><?php echo $art->title; ?></h1></header>
    <div><?=$art->text; ?></div>
</article>