<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>UNA Map</title>
    </head>
    <body>
    <div class = "imgbox flex-parent">
        <img class = "center-fit flex-child" src="../img/map.jpg" alt="UNA map">
    </div>
    <div class = "flex-legend">
        <p>test</p>
    </div>
    
        <p>Click to view legend</p>
        <form action="legend.php" method="post">
            <input type="submit" value="View Legend">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
