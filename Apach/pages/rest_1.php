<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список блюд</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
</head>
<body>
<h1>Список блюд</h1>
<ol>
    <?php
    $mysqli = new mysqli("db", "root", "example", "appDB");
    $result = $mysqli->query("SELECT * FROM student");
    foreach ($result as $row){
        echo "<li>{$row['surname']} {$row['name']}</li>";
    }
    ?>
</ol>
<a href="rest_4.html">На главную</a>
<br>
<a href="login/login.php">Админу</a>
</body>
</html>