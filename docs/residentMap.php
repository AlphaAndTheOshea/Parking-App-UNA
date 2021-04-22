
<!DOCTYPE html>
<html>
    <head>
        <title>Resident Parking</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <img src="../img/ResidentsParkingMap.png" class="residentMapIMG">

        </br>
        <?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        echo "<a href='$url'>back</a>";
        ?>
    </body>
</html>
