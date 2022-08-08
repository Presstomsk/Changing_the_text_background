<!DOCTYPE html>
<html>
<head>
<title>Домашняя работа</title>
<meta charset="utf-8">
</head>
<body>
<h2>Введи данные:</h2>
<form method="POST">
<p>Введите значение R (0-255): <input type="text" name="R" /></p>
<p>Введите значение G (0-255): <input type="text" name="G" /></p>
<p>Введите значение B (0-255): <input type="text" name="B" /></p>
<input type="submit" value="Accept">
</form>
<br>
<?php
$R = "не определено";
$G = "не определено";
$B = "не определено";

if(isset($_POST["R"])){
$R = $_POST["R"];
}

if(isset($_POST["G"])){
$G = $_POST["G"];
}

if(isset($_POST["B"])){
$B = $_POST["B"];
}

printf("<span style='background-color: rgb(%d,%d,%d)'>Тестовый текст</span>", $R, $G, $B);

?>
</body>
</html>