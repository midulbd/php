<html>
    <head>
        
    </head>
    <body>
        <form action="test1.php" method="post">
            <table>
                <tr><th>Simple Interest Calculator</th></tr>
                <tr><td>Principal Amount :</td><td> <input type='text' name='amount'/></td></tr>
                <tr><td>Annual Interest Rate :</td><td> <input type='text' name='rate'/><br/></td></tr>
                <tr><td>Time Period :</td><td> <input type ='text' name ='time'/></td></tr>
                <tr><td><input type="submit" name='submitbutton' value="Calculate"></td></tr>
            </table>
        </form>
        <?php 
        require 'interestAmountClass.php';
        if(isset($_POST['submitbutton']))
        {
            $InterestAmount=new interestAmount();
            $InterestAmount->amount=$_POST['amount'];    
            $InterestAmount->rate=$_POST['rate'];  
            $InterestAmount->time=$_POST['time'];  
            echo "result = ".$InterestAmount->get_total_amount();
              
        }
        ?>
        
        
    </body>
</html>