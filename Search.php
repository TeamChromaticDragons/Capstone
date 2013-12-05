<?php
session_start();    

if (isset($_SESSION['SignedIn'])){;}
else {$_SESSION['SignedIn']=0;}

if($_SESSION['SignedIn']==0){echo"You are Not signed in!";}
else {



        $user="root";
        $password="Capstone";
        $database="Library";
        mysql_connect('127.0.0.1',$user,$password) or die("Failed to Connect");
        mysql_select_db($database) or die( "Unable to select database");

$Searchby=mysql_real_escape_string($_POST['Searchby']);
$Searchfor=mysql_real_escape_string($_POST['Searchfor']);
echo "Searching for ";
echo $Searchfor;
echo " by ";
echo $Searchby;
echo "<br>";
$sql="SELECT * FROM customerinfo WHERE $Searchby='$Searchfor'";
$result = mysql_query($sql);
echo '<table border="1">
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>State</th>
<th>DoB</th>
<th>PrimaryPhone</th>
<th>SecondaryPhone</th>
<th>JoinDate</th>
<th>Status</th>
<th>Accounts</th>
</tr>
';
while ( $db_field = mysql_fetch_array($result) ) {
echo '<td>';
echo $db_field['CustomerID'];
echo '</td><td>';
echo $db_field['FirstName'];
echo '</td><td>';
echo $db_field['LastName'];
echo '</td><td>';
echo $db_field['Address'];
echo '</td><td>';
echo $db_field['State'];
echo '</td><td>';
echo $db_field['DoB'];
echo '</td><td>';
echo $db_field['PrimaryPhone'];
echo '</td><td>';
echo $db_field['SecondaryPhone'];
echo '</td><td>';
echo $db_field['JoinDate'];
echo '</td><td>';
echo $db_field['Status'];
echo '</td><td>';
echo '<form action ="AccountDetail.php" method ="POST">
<input type ="hidden" name="FirstName" value="';
echo $db_field['FirstName'];
echo '" />';
echo '<input type ="hidden" name="LastName" value="';
echo $db_field['LastName'];
echo '" />';
echo '<input type ="hidden" name="CustomerID" value="';
echo $db_field['CustomerID'];
echo '" />';
echo '<input type ="submit" value="Display" /></form>';
echo '</td></tr>';
}
echo '</table>';
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
