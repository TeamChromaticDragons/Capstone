<?php
session_start();    

if (isset($_SESSION['SignedIn'])){;}
else {$_SESSION['SignedIn']=0;}

if($_SESSION['SignedIn']==1){echo"You are already signed in!";}
else {



        $user="root";
        $password="Capstone";
        $database="Library";
        mysql_connect('127.0.0.1',$user,$password) or die("Failed to Connect");
        mysql_select_db($database) or die( "Unable to select database");

$myusername=mysql_real_escape_string($_POST['user']);
$mypassword=mysql_real_escape_string($_POST['pwd']);

$sql="SELECT * FROM employeeinformation WHERE Username='$myusername' and Password='$mypassword'";
$result = mysql_query($sql);

while ( $db_field = mysql_fetch_array($result) ) {
$_SESSION['FirstName']=$db_field['FirstName'];
$_SESSION['LastName']=$db_field['LastName'];
$_SESSION['AdminState']=$db_field['AdminState'];
echo "You are now Signed in as ";
echo $_SESSION['FirstName'];
echo " ";
echo $_SESSION['LastName'];
$_SESSION['SignedIn']=1;
}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
        <?php
            if($_SESSION['SignedIn']==1)
            {
            echo "Signed In<br>";
            }
            else{echo "Failed to Sign In<br>";}
        ?>
        <br><p>You will be redirected to the Homepage In <span id="counter">10</span> second(s). <a href="index.php">Click Here</a> to skip wait</p>
        <script type="text/javascript">
        function countdown() {
        var i = document.getElementById('counter');
        if (parseInt(i.innerHTML)<=0) {
            location.href = 'index.php';
        }
           i.innerHTML = parseInt(i.innerHTML)-1;
        }
        setInterval(function(){ countdown(); },1000);
        </script>
            
        
    </body>
</html>
