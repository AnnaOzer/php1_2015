<form method="post" action="/editing.php">
    <p><label>Название новости: <br> <input type="text" name="title" size="50" value="<?php $toedit['title']?>"></label></p>
    <p><label>Текст новости: <br ><textarea name="text" cols="52" rows="8" value="<?php $toedit['text']?>"></textarea></label></p>
    <input type="submit">
</form>