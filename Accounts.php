<?php 

class Account {
    public $accountNumber;
    public $balance;

    public function depositAmount($amount) {
        echo "Depositing: " . $amount . "<br />"; 
    }

    public function withdrawAmount($amount) {
        echo "Withdraw: " . $amount . "<br />";
    }

    public function getBalance() {
        return $this->balance;
    }
}

class CheckingAccount extends Account {
    public function transfer($amount) {
        echo "Transfer by: " . $amount . "<br />";
    }
}

class PremiumCheckingAccount extends CheckingAccount {
    public $mininumBalace = 0;
}


?>