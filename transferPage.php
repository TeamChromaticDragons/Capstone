<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    
     <?php
            $checking =  array("checking", 200.00);
            $savings = array("savings", 5.00);
     ?>
    
    <body>
        <form method="post" action="confirmTransfer.php">
            <fieldset id="transferFrom">
                <label>From account: </label>
                <select name="fromAccount">
                    <option value="<?php echo $checking[0]; ?>"><?php echo $checking[0]; ?></option>
                    <option value="<?php echo $savings[0]; ?>"><?php echo $savings[0]; ?></option> 
                </select>
                Amount:
                <input type="number" name="amountToTransfer" size="10" /> <br />
            </fieldset>
            <fieldset id="transferTo">
                <label>To account: </label>
                <select name="toAccount">
                    <option value="<?php echo $checking[0]; ?>"><?php echo $checking[0]; ?></option>
                    <option value="<?php echo $savings[0]; ?>"><?php echo $savings[0]; ?></option> 
                </select>

            </fieldset>
            <p id="button">
			<input type="submit" value="Submit Transfer"  />  <!-- //ONCLICK="" -->
            </p>
       </form>
       <?php
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
    </body>
</html>
