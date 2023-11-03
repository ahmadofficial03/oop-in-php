<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php 
    require("Accounts.php");

    // $account = new Account();
    // $account->depositAmount(20);
    // $account->withdrawAmount(10);

    // $checkingAccount = new CheckingAccount();
    // $checkingAccount->depositAmount(50);        
    // $checkingAccount->transfer(10);

    $PremiumCheckingAccount = new PremiumCheckingAccount();
    $PremiumCheckingAccount->depositAmount(100);
    $balance = $PremiumCheckingAccount->getBalance();
    $PremiumCheckingAccount->withdrawAmount(30);
    $PremiumCheckingAccount->transfer(20);
    echo $PremiumCheckingAccount->mininumBalace;
    
    ?>
</body>
</html>