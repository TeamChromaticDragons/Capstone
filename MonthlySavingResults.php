<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
        Saving Amount: <?php echo $_POST["Amount"];?><br>
        Monthly Interest Rate:<?php echo $_POST["Rate"];?><br>
        Total Months:<?php echo $_POST["Months"];?>
        
        <br>
        <?php
        $rate =$_POST["Rate"]/100;
        echo "Month / Money<br>";
        $y = $_POST["Amount"];
        $format = '%1$02d  / $%2$010s';
        for($x=1; $x<=$_POST["Months"]; $x++)
        {
            $y = $y +round($y*($rate),2);
            $s = number_format($y, 2);
            echo sprintf($format , $x , $s);
            echo "<br>";
        }    
        ?>
        

    </body>
</html>
