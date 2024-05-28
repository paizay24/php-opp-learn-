<?php 

class BankAccount{
      private $accountHolder;
      private $balance = 0 ;

      public function __construct($name,$amount){
            $this->accountHolder = $name;
            $this->balance += $amount;
      }

      //get 
      public function checkBalance(){
            return $this->accountHolder . " has " . $this->balance . " kyats";
      }

      //set
      public function deposit($addAmount){
            if($addAmount>0){
                  $this->balance += $addAmount;
            }
      }

      public function onlineDeposit($where,$addAmount){
            if($addAmount>0){
                  $this->balance += $addAmount;
                  return $this->balance  . " has deposited from  " . $where; 
            }
      }

      public function withdraw($subAmount){
            if($this->balance > $subAmount){
                  $this->balance -= $subAmount;
            }
      }


}