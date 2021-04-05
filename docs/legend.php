<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="post">
        <select name="person">
            <option value="Student">Student</option>
            <option value="Faculty">Faculty</option>
            <option value="Visitor">Visitor</option>
        </select>
        <input type="submit" name="submit" value="Get Selected Values" />
        </form>
        <?php
        if(isset($_POST['submit'])){
            $selected_val = $_POST['person'];  // Storing Selected Value In Variable
            echo "You have selected :" .$selected_val;  // Displaying Selected Value
            }
        ?>
    </body>
</html>
