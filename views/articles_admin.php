<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мой первый блог</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Мой первый блог</h1>
            <div>
                <a href="index.php?action=add">Добавить статью</a>
                <table class="admin-table">
                <tr>
                    <th>Дата</th>
                    <th>Заголовок</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($articles as $a): ?>
                <tr>
                    <th><?=$a['date']?></th>
                    <th><?=$a['title']?></th>
                    <th><a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></th>
                    <th><a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></th>
                </tr>
                <?php endforeach ?>
                </table>
                
            </div>
            <footer>
                <p>Мой первый блог <br> Copyright &copy; 2015</p>
            </footer>
        </div>
    </body>
</html>
