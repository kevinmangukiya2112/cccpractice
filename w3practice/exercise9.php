<?php
class BankAccount {
    private $accountNumber;
    private $accountHolder;
    private $balance;

    public function __construct($accountNumber, $accountHolder, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds for withdrawal.";
        }
    }

    public function displayInfo() {
        echo "Account Number: {$this->accountNumber}, Account Holder: {$this->accountHolder}, Balance: {$this->balance} USD";
    }
}

// Create a bank account object
$account1 = new BankAccount("123456", "John Doe", 1000);
$account2=new BankAccount(234567,"kevin",10);

// Deposit and withdraw from the account
$account1->deposit(500);
$account1->withdraw(200);

// Display account information
$account1->displayInfo();
echo"<br>";
$account2->deposit(20);
$account2->withdraw(40);
echo"<br>";
$account2->displayInfo();

?>