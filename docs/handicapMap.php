<?php

echo "<h2>Testing for handicap map page</h2>";

$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
echo "<a href='$url'>back</a>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Handicap Parking</title>
</head>
<body>
	<img src="../img/handicapParking.png">
</body>
</html>