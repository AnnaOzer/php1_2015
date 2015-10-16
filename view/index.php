<html>
<head>
    <title>Новости</title>
</head>
<body>
    <?php

    foreach ($news as $article): ?>
    <article>
        <h1><?=$article['title']; ?></h1>
        <div><?=$article['text']; ?></div>
    </article>
    <?php endforeach; ?>

    <?php
        include '/view/showoneform.php';
        include '/view/editoneform.php';
    ?>


    <h2><a href="/view/addform.php">Добавить новость</a></h2>

</body>
</html>