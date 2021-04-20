<!DOCTYPE html>
<html>
<head>
	<title>Commuter Parking</title>
</head>
<body>
	<img src="../img/commuterParking.png">
	<?php
// define variables and set to empty values
$filter = $motorcycleErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["filter"])) {
      null;
  } else {
    getPhoto();
  }
}

function getPhoto() {
    echo "<img src='../img/motorcycleMap.png'";
    echo "</br>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Filters:
  <input type="radio" name="filter" <?php if (isset($filter) && $filter=="motorcycle") echo "checked";?> value="motorcycle">Motorcycle
  <span class="error"> <?php echo $motorcycleErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>