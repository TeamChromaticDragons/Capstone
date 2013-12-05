<?php
session_start();
if(isset($_SESSION['SignedIn'])){;}
else $_SESSION['SignedIn']=0;


if($_SESSION['SignedIn']==0){echo'Not Signed In!';}
else{

    $AccountType=$_POST['AccountType'];
    $Balance=$_POST['Balance'];
    $APR=$_POST['APR'];
    $CustomerID=$_POST['CustomerID'];

    $user="root";
    $password="Capstone";
    $database="Library";
    mysql_connect('127.0.0.1',$user,$password) or die("Failed to Connect");
    mysql_select_db($database) or die( "Unable to select database");

    $sql="INSERT INTO accounts (AccountNumber, CustomerID,AccountType, Balance, APR,Status)
    VALUES( 100, ".$CustomerID.", '".$AccountType."', '".$Balance."', '".$APR."', 'New')";

    $run =mysql_query($sql);
if(! $run )
{
  die('Could not enter data: ' . mysql_error());
}
echo 'Seccessfully inserted into database.';
echo '<form action ="AccountDetail.php" method ="POST">';
echo '<input type ="hidden" name="FirstName" value="';
echo $_POST['FirstName'];
echo '" />';
echo '<input type ="hidden" name="LastName" value="';
echo $_POST['LastName'];
echo '" />';
echo '<input type ="hidden" name="CustomerID" value="';
echo $_POST['CustomerID'];
echo '" />';
echo '<input type ="submit" value="Return" /></form>';
    



}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <a href="index.php">Home</a>
    </body>
</html>
