<?php

require_once 'class_account.php';

class CheckingAccount extends Account
{
    //....
    public function transfer($amount)
    {
        echo 'Transfering ' . $amount . '<br>';
    }
}

?>