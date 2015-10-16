<html>
<head>
    <title>Редактирование новости</title>
</head>
<body>
<h2>Редактирование новости</h2>
<form method="post" action="/controllers/editing.php">
    <p><label>Название новости: <br> <input type="text" name="title" size="50" value="<?php echo $toedit['title']; ?>"></label></p>
    <p><label>Текст новости: <br ><textarea name="text" cols="52" rows="8"><?php echo $toedit['text']; ?></textarea></label></p>
    <input type="submit">
</form>
<a href="/index.php">К списку всех новостей</a>
</body>
</html>