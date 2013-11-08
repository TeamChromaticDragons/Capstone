<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
        Loan Amount:$ <?php echo $_POST["Amount"];?><br>
        Monthly Interest Rate:<?php echo $_POST["Rate"];?>%<br>
        Total Months:<?php echo $_POST["Months"];?><br>
        <?php
        $rate =$_POST["Rate"]/100;
        $Amount = $_POST["Amount"];
        $format = 'Month: %1$02d  / Amount Left:$%2$010s, Interest:$%3$07s, Remainder:$%4$07s';
        $Payment = ($_POST["Amount"]*($rate+($rate/(pow((1+$rate),$_POST["Months"])-1))));
        $Payment = ceil($Payment*100)/100;
        echo "Monthly Payment:$";echo $Payment;echo"<br>";
        

        $y = $_POST["Months"];
        for($x=1; $x<=$y; $x++)
        {
            $Interest = round($Amount*($rate),2);
            if($Payment>($Interest+$Amount)){$Payment=($Interest+$Amount);}
            $Remainder = $Payment-$Interest;
            
            $Amount = $Amount +$Interest-$Payment;
            echo sprintf($format , $x , number_format($Amount, 2), number_format($Interest, 2), number_format($Remainder, 2));
            echo "<br>";
            if($Amount == 0){$x=$y; echo "----Loan Paid Off----";}
            elseif($Amount != 0 && $x ==$y){echo "!!!Did not complete in time!!!";}
        }    
        ?>
        

    </body>
</html>
