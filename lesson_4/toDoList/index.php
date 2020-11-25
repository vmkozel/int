<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo list</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="form">
    <form action="php/Task.php" method="post" enctype="multipart/form-data">
        <h1>ToDo List</h1>
        <div class="form_item">
            <input type="text" name="task" class="form_input" required placeholder="Введите задание">
        </div>
        <div class="form_item"><input type="submit" value="Добавить задание" class="button"></div>
    </form>
</div>
</body>
</html>
<?php
