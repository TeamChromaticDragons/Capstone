<?php
session_start();   





    echo 'Add New Employee';
    echo '<form name="Data" action="EmplCreate.php" method="POST">';
    echo 'First Name: ';
    echo '<input type="text" name="FName">';
    echo '<br>Last Name : ';
    echo '<input type="text" name="LName">';
    echo '<br>ID: ';
    echo '<input type="text" name="ID">';
    echo '<br>Username : ';
    echo '<input type="text" name="Username">';
    echo '<br>Password : ';
    echo '<input type="text" name="Password">';
    echo '<br>AdminState:';
    echo '<select name="Admin">
          <option value="1">Yes</option>
          <option value="0">No</option>
          </select><br>;
          <input type="submit" value="Submit">
          </form>';  















?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        





    </body>
</html>
