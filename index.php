<?php
session_start();
if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
echo "Views=". $_SESSION['views'].'<br>';

if(isset($_SESSION['SignedIn'])){;}
else $_SESSION['SignedIn']=0;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>OK Credit Union Homepage</title>
    </head>
    <body>
        <?php
            if($_SESSION['SignedIn']==0)
            {
                echo '<form name="input" action="login.php" method="post">';
                echo 'Username: <input type="text" name="user"><br>';
                echo 'Password: <input type="password" name="pwd">';
                echo '<input type="submit" value="Login">';
                echo '</form> <br><br>';
            }
            else
            {
                echo 'Welcome '. $_SESSION['FirstName'].' '.$_SESSION['LastName'].'.<br>';
                
                echo '<a href="Calc.php">Calc</a><br>';
                echo '<a href="Logout.php">Logout</a><br>';
                if($_SESSION['AdminState']==1){echo '<a href="AdminPanel.php">AdminPanel</a><br>';}
                echo '
                <form name="Search" action="Search.php" method="POST">
                <br>Search by:
                <select name="Searchby">
                <option value="FirstName">First Name</option>
                <option value="LastName">Last Name</option>
                <option value="ID">ID Number</option>
                <option value="Address">Address</option>
                <option value="State">State</option>
                <option value="PrimaryPhone">Phone</option>
                <option value="Zipcode">Zip Code</option>
                <option value="Status">Status</option>
                </select><br>
                Search for: <input type="text" name="Searchfor"><br>
                <input type="submit" value="Submit">
                </form>';





            }
        ?>


    </body>
</html>
