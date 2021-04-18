
<?php

echo "<h2>Testing for visitor map page</h2>";

$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
echo "<a href='$url'>back</a>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Visitor Parking</title>
</head>
<body>
	<img src="../img/visitorParking.png">
</body>
</html>