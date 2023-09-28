<?php

require_once 'BankAccount.php';

$account = new BankAccount(25, 45000);

try {
    print_r($account->depositMoney(300) . PHP_EOL);
    print_r($account->withdrawMoney(200) . PHP_EOL);
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}