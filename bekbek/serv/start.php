<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Меню</title>
</head>
<body>
	<h1>Меню</h1>
    <?php
		$con = mysqli_connect("db", "user", "password", "appDB");
		$result=$con->query("SELECT * FROM menu"); 
		while ($row = mysqli_fetch_assoc($result)) 
		   	{
		   		echo "<p>" ."<a>".$row['name_food'] . " " . "</a>".$row['price'] . " руб" . "</p>";
		   	}
		?>
	<a href="index.php"><p>Начальная страница</p></a>
    <a href="profile.php"><p>Профиль</p></a>
    <a href="logout.php"><p>Выход</p></a>
</body>
</html>