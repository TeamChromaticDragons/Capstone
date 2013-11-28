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
$FirstName=mysql_real_escape_string($_POST['FirstName']);
$LastName=mysql_real_escape_string($_POST['LastName']);
$CustomerID=mysql_real_escape_string($_POST['CustomerID']);
echo 'Searching for accounts owned by ';
echo $FirstName;

echo " ";
echo $LastName;
echo ' with an ID Number of ';
echo $CustomerID;
echo '<br>';
$sql="SELECT * FROM Accounts WHERE CustomerID='$CustomerID'";
$result = mysql_query($sql);
echo '<table border="1">
<tr>
<th>Account Number</th>
<th>Account Type</th>
<th>Balance</th>
<th>APR</th>
<th>Last Payment</th>
<th>Status</th>
</tr>
';
while ( $db_field = mysql_fetch_array($result) ) {
echo '<td>';
echo $db_field['AccountNumber'];
echo '</td><td>';
echo $db_field['AccountType'];
echo '</td><td>';
echo $db_field['Balance'];
echo '</td><td>';
echo $db_field['APR'];
echo '</td><td>';
echo $db_field['LastPayment'];
echo '</td><td>';
echo $db_field['Status'];
echo '</td></tr>';
}
echo '</table>';

echo '<form action ="PlaceHolder.php" method ="POST">
<input type ="hidden" name="FirstName" value="';
echo $db_field['FirstName'];
echo '" />';
echo '<input type ="hidden" name="LastName" value="';
echo $db_field['LastName'];
echo '" />';
echo '<input type ="hidden" name="CustomerID" value="';
echo $db_field['CustomerID'];
echo '" />';
echo '<input type ="submit" value="Credit" />';

echo '<form action ="PlaceHolder.php" method ="POST">
<input type ="hidden" name="FirstName" value="';
echo $db_field['FirstName'];
echo '" />';
echo '<input type ="hidden" name="LastName" value="';
echo $db_field['LastName'];
echo '" />';
echo '<input type ="hidden" name="CustomerID" value="';
echo $db_field['CustomerID'];
echo '" />';
echo '<input type ="submit" value="Debit" />';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>OK Credit Union</title>
    </head>
    <body>
        





    </body>
</html>
