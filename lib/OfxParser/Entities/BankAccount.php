<?php

namespace OfxParser\Entities;

class BankAccount extends AbstractEntity
{
    public $agencyNumber;
    public $accountNumber;
    public $accountType;
    public $balance;
    public $balanceDate;
    public $routingNumber;
    public $statement;
    public $transactionUid;
}
