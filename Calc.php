<?php
session_start();

if (isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views'] + 1;
else
    $_SESSION['views'] = 1;
echo "Views=" . $_SESSION['views'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
        if ($_SESSION['SignedIn'] == 1) {
            echo 'Monthly Saving<br>
        <form name="MonthlySaving" action="MonthlySavingResults.php" method="POST">
            Starting Deposit Amount: <input type="text" name="Amount"><br>
            Monthly Interest Rate Percentage:<input type="text" name="Rate"><br>
            Total Months:<input type="text" name="Months"><br>
        <input type="submit" value="Submit">
        </form>

        <br>Monthly Loan<br>
        <form name="MonthlyLoan" action="MonthlyLoanResults.php" method="POST">
            Loan Amount: <input type="text" name="Amount"><br>
            Monthly Interest Rate Percentage:<input type="text" name="Rate"><br>
            Total Months to Pay back:<input type="text" name="Months"><br>
            
        <input type="submit" value="Submit">
        </form>';
        } else {
            echo' <p>You are Not Logged In<br>You will be redirected to the Homepage In <span id="counter">10</span> second(s). <a href="index.php">Click Here</a> to skip wait</p>
        <script type="text/javascript">
        function countdown() {
        var i = document.getElementById("counter");
        if (parseInt(i.innerHTML)<=0) {
            location.href = "index.php";
        }
           i.innerHTML = parseInt(i.innerHTML)-1;
        }
        setInterval(function(){ countdown(); },1000);
        </script>';
        }
        ?>



    </body>
</html>
