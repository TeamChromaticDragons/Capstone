<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
     <?php
        $_SESSION['type'] = $_POST['type'];
        $username="root";$password="sesame";$database="library";
        mysql_connect('localhost',$username,$password);
        @mysql_select_db($database) or die( "Unable to select database");
        $sql1="INSERT INTO accounts (type, balance)VALUES('{$_POST['type']}','{0.00]}')";
        mysql_query($sql1);
        mysql_close();
     ?>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
