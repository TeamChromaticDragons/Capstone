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
        
    </body>
</html>
