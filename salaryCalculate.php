<?php 
    class Salarycalculate
    {
  
        public $basic_amount;
        public $house_rent;
        public $medical_allowance;
        
        function get_total_salary()
        {
            $house_rent = $this->basic_amount*$this->house_rent/100;
            $medical_allowance = $this->basic_amount*$this->medical_allowance/100;
            return $this->basic_amount + $house_rent + $medical_allowance;
        }
    }