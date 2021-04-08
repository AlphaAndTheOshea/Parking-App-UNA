<?php

echo "<h2>Testing for visitor map page</h2>";


$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
echo "<a href='$url'>back</a>";

?>
