<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title> 
    </head>
    
    <?php
           session_start();
            $checking =  array("checking", 200.00);
            $savings = array("savings", 5.00);
    ?>
    
    <body>
        <?php
        echo $checking[0];  // 
        ?>
        <br>
        hi
        
        <table>
            <tr>
                <td>
                    Account
                </td>
                 <td>
                    Balance
                </td>
            </tr>
             <tr>
                <td>
                    <?php echo $checking[0]; ?>
                </td>
                 <td>
                    <?php echo $checking[1]; ?>
                </td>
            </tr>
             <tr>
                <td>
                    <?php echo $savings[0]; ?>
                </td>
                 <td>
                    <?php echo $savings[1]; ?>
                </td>
            </tr>
        </table>
        
        <?php
            $username="root";$password="sesame";$database="library";
            mysql_connect('localhost',$username,$password);
            @mysql_select_db($database) or die( "Unable to select database");
            $data = mysql_query("SELECT * FROM member") or die(mysql_error());
            // puts the "member" info into the $info array 
            $info = mysql_fetch_array( $data );
             // Print out the contents of the entry 
            Print "<b>Name:</b> ".$info['firstName'] . " "; 
            Print "<b>Last Name:</b> ".$info['lastName'] . " <br>"; 
            // not sure if res is working? maybe cause only one table entry?
            Print "<table border cellpadding=3>"; 
            while($info = mysql_fetch_array( $data )) //does not like mysql_fetch_array.. when removed is infinite loop
            { 
                Print "<tr>"; 
                Print "<th>Name2:</th> <td>".$info['firstName'] . "</td> "; 
                Print "<th>Last Name2:</th> <td>".$info['lastName'] . " </td></tr>"; 
            } 
            Print "</table>"; 
            
            
            
            mysql_close();
        ?>
        
        <FORM class= "openDebitAccountButton">
		<INPUT Type="BUTTON" VALUE="Open New Debit Account" ONCLICK="window.location.href='openAnAccount.php'">
	</FORM>
    </body>
</html>
