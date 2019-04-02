<html>
    <body>
        
        <h1>Making Payment</h1>

        <form id='payment-form' action='payment.php' method='post'>
            <table>
                <tr>
                    <td>
                        Amount:
                    </td>
                    <td>
                        <input type='number' name='amount' value='<?php session_start(); $price = 400*(int)$_SESSION['organo']; echo $price?>'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Currency:
                    </td>
                    <td>
                        <input type='text' name='currency' value='SGD'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Source:
                    </td>
                    <td>
                        <input type='text' name='source' value='tok_visa'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Description:
                    </td>
                    <td>
                        <input type='text' name='description' value='Payment for Shuttle Service booking'/>
                    </td>
                </tr>
            </table>
            
            <input type='submit' />
        
        </form>
        
    </body>
</html>