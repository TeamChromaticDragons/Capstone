<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="confirmNewAccount.php">
            <fieldset id="accountInfo">
		<p id="state"><label>Account Type:</label>
                    <select name="states">
			<option value="Checking">Checking</option>
			<option value="Saving">Saving</option>
			<option value="MMSA">Money Market Saving</option>		
		</select>
            </fieldset>
            <p id="button">
		<input type="submit" value="Submit New Account" ONCLICK="window.location.href='confirmNewAccount.php'" />  //ONCLICK=""
            </p>
        </form>
        <?php
        // code
        ?>
    </body>
</html>
