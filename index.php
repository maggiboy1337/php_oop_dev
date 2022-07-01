<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once './classes/class_premiumCheckingAccount.php';

        $checkingAccount = new CheckingPremiumAccount();

        $checkingAccount->deposit(20);

        $checkingAccount->withdraw(10);

        $checkingAccount->transfer(100);

        echo $checkingAccount->minimumBalance;


    ?>
</body>
</html>