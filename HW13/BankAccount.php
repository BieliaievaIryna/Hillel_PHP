<?php

class BankAccount
{
    private int $accountNumber;
    private int $balanceAmount;

    /**
     * @param int $accountNumber
     * @param int $balanceAmount
     */
    public function __construct(int $accountNumber, int $balanceAmount)
    {
        $this->setAccountNumber($accountNumber);
        $this->setBalanceAmount($balanceAmount);
    }

    /**
     * @param int $money
     * @return int
     * @throws Exception
     */
    public function depositMoney (int $money): int
    {
        $this->checkMoney($money);
        return $this->getBalanceAmount() + $money;
    }

    /**
     * @param int $money
     * @return int
     * @throws Exception
     */
    public function withdrawMoney (int $money): int
    {
        $this->checkBalance($money);
        $this->checkMoney($money);
        return $this->getBalanceAmount() - $money;
    }

    /**
     * @param int $accountNumber
     * @return void
     */
    public function setAccountNumber (int $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * @param int $balanceAmount
     * @return void
     */
    public function setBalanceAmount (int $balanceAmount): void
    {
        $this->balanceAmount = $balanceAmount;
    }

    /**
     * @return int
     */
    public function getAccountNumber (): int
    {
        return $this->accountNumber;
    }

    /**
     * @return int
     */
    public function getBalanceAmount (): int
    {
        return $this->balanceAmount;
    }

    /**
     * @param int $money
     * @return void
     * @throws Exception
     */
    public function checkBalance (int $money): void
    {
        if($this->getBalanceAmount() <= 0 && $this->getBalanceAmount() < $money) {
            throw new Exception('You don\'t have enough money!');
        }
    }

    /**
     * @param int $money
     * @return void
     * @throws Exception
     */
    public function checkMoney (int $money): void
    {
        if($money <= 0) {
            throw new Exception('You must enter a sum greater than 0!');
        }
    }
}