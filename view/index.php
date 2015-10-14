<html>
<head>
    <title>Новости</title>
</head>
<body>
<h1>Все главные новости</h1>
<a href="/index_adder.php">Добавить еще новость</a>
    <?php
    foreach ($news as $article): ?>
    <article>
        <h1><?=$article['title']; ?></h1>
        <div><?=$article['text']; ?></div>
    </article>
    <?php endforeach; ?>
</body>
</html>