<!DOCTYPE html>
<html>
    <head>
        <title>Handicap Parking</title>
        <link rel="stylesheet" href="../style.css">

    </head>
    <body>
        <img src="../img/handicapParking.png" class="handicapMapIMG">

        </br>
        <?php
        $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        echo "<a href='$url'>back</a>";
        ?>
    </body>
</html>