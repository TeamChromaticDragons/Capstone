<?php
session_start();   

if($_SESSION['SignedIn']==0){echo'Not Signed In!';}
else{

    $FName=$_POST['FName'];
    $LName=$_POST['LName'];
    $ID=$_POST['ID'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $AdminState=$_POST['Admin'];

    $user="root";
    $password="Capstone";
    $database="Library";
    mysql_connect('127.0.0.1',$user,$password) or die("Failed to Connect");
    mysql_select_db($database) or die( "Unable to select database");

    $sql="INSERT INTO employeeinformation (FirstName, LastName,ID, Username, Password,AdminState)
    VALUES('".$FName."', '".$LName."', ".$ID.", '".$Username."', '".$Password."', '". $AdminState."')";
    echo $sql;
    $run =mysql_query($sql);

}


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
