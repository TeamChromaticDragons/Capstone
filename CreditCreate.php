<?php
session_start();



if(isset($_SESSION['SignedIn'])){;}
else $_SESSION['SignedIn']=0;


if($_SESSION['SignedIn']==0){echo'Not Signed In!';}
else{
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $CustomerID=$_POST['CustomerID'];
     echo '
          <form name="Data" action="CreateCredit.php" method="POST">
          <br>Account Type:
          <select name="AccountType">
          <option value="Saving">Saving</option>
          <option value="Debit">Debit</option>
          <option value="Credit">Credit</option>
          </select><br>';
    echo 'First Name: ';
    echo $_POST['FirstName'];
    echo '<br>Last Name : ';
    echo $_POST['LastName'];
    echo '<br>CustomerID: ';
    echo $_POST['CustomerID'];
    echo '<input type ="hidden" name="CustomerID" value="';
    echo $_POST['CustomerID'];
    echo '" />';
    echo '<input type ="hidden" name="FirstName" value="';
    echo $_POST['FirstName'];
    echo '" />';
    echo '<input type ="hidden" name="LastName" value="';
    echo $_POST['LastName'];
    echo '" />';
    echo '<br>
          Balance: <input type="text" name="Balance"><br>
          APR: <input type="text" name="APR"><br>
          <input type="submit" value="Submit">
          </form>';  
}



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>OK Credit Union</title>
    </head>
    <body>
        <a href="index.php">Home</a>
    </body>
</html>
