<html>
    <head>
        <title>Employee Salary</title>
    </head>
    <body>
    <pre>
        <form action="salary.php" method="post">
            Employee Name:<input type='text' name='name'><br/>
            Basic Amount:<input type='text' name='basic_amount'><br/>
            House Rent:<input type='text' name='house_rent'> % of basic<br/>
            Medical Allowance:<input type='text' name='medical_allowance'>% of basic<br/>
            <input type='submit' value='Submit' name='form_submission'/>
        </form>
        
        <?php
        
            require 'salaryCalculate.php';
            
            if(isset($_POST['form_submission']))
            {
                
                $final_total_salary=new Salarycalculate();
                
                $final_total_salary->basic_amount=$_POST['basic_amount'];
                
                $final_total_salary->house_rent=$_POST['house_rent'];
                
                $final_total_salary->medical_allowance=$_POST['medical_allowance'];
               
                
                echo $_POST['name'].' your total salary: '.$final_total_salary->get_total_salary();
            }
        ?>
    </body>
</html>