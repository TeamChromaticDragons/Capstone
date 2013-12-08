<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
        <?php
            
            $_SESSION['fromAccount'] = $_POST['fromAccount'];
            $_SESSION['toAccount'] = $_POST['toAccount'];
            $_SESSION['ammount'] = $_POST['ammount'];
        
            if( $_GET['action'] == 'transfer') 
		{
                    //if ( acount selected = checking)
                    //if ( acount selected =  saving)
                    //etc
                    //add a lock to prevent racing condition
                            
                    $from = $_GET['fromAccounts'];
                    $to = $_GET['toAccounts'];
                                
                    $newBalanceFrom = $balance - $amountToTransfer;
                    $newBalanceTo = $balance + $amountToTransfer;
                    $balance = $newBalanceFrom;
                    $balance = $newBalanceTo; 
		}
	?>
    <body>
        
        Transfer successful.<br>
        <?php echo $_POST["amountToTransfer"];?> dollars transfered from your <?php echo $_POST["fromAccount"];?> 
        account to your <?php echo $_POST["toAccount"];?> account.
        <br>
        Insert return to accounts page button here.
        
    </body>
</html>
