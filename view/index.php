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

</body>
</html>