<?php
class interestAmount {
   public $amount;
   public $rate;
   public $time;
   
   function get_total_amount()
   {
       return $this->amount * $this->rate *$this->time/100;
       
   }
}

