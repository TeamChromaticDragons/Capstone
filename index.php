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
        <title></title>
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
            }
        ?>


    </body>
</html>
