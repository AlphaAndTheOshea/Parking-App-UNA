<!DOCTYPE HTML>  
<html>
    <head><link rel="stylesheet" href="style.css"></head>
    <body>  

        <h2>UNA Parking Pal</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">  
            <input type="radio" name="person" value="resident">Resident Student
            <input type="radio" name="person" value="commuter">Commuter Student
            <input type="radio" name="person" value="faculty">Faculty
            <input type="radio" name="person" value="visitor">Visitor
            <input type="radio" name="person" value="handicap">Handicap 
            <br><br>
            <input type="submit" name="submit" value="Submit">  
        </form>

        <?php
        // define variables and set to empty values
        $res_status = 'unchecked';
        $comm_status = 'unchecked';
        $faculty_status = 'unchecked';
        $visitor_status = 'unchecked';

        if (isset($_POST['submit'])) {
            $person_selected = $_POST['person'];
            if ($person_selected == 'resident') {
                header("Location: residentMap.php");
            } elseif ($person_selected == 'commuter') {
                header("Location: commuterMap.php");
            } elseif ($person_selected == 'faculty') {
                header("Location: facultyMap.php");
            } elseif ($person_selected == 'visitor') {
                header("Location: visitorMap.php");
            } elseif ($person_selected == 'handicap') {
                header("Location: handicapMap.php");
            }
        }
        ?>
        <form method="post" action="map.php">
            </br>
            <input type="submit" value="Back to main map"/>
        </form>

    </body>
</html>
