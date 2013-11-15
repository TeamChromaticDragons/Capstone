<?php

session_start();
session_destroy();


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        

        <b>You are Now Signed out</b><br>
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
