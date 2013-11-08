<?php
session_start();    
if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
echo "Views=". $_SESSION['views'];



if(isset($_SESSION['SignedIn'])){;}
else {$_SESSION['SignedIn']=0;}

if($_POST["user"] == "test" && $_POST["pwd"] == "test")
{
$_SESSION['SignedIn']=1;
$_SESSION['Name']="Tester";
}
else{;}
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
            echo "Signed In";
            }
            else{echo "Failed to Sign In";}
        ?>
        <p>You will be redirected to the Homepage In <span id="counter">10</span> second(s). <a href="index.php">Click Here</a> to skip wait</p>
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
