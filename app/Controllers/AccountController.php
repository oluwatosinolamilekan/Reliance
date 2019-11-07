<?php

namespace App\AccountController;

class AccountController
{
    const USERNAME  = "MK_TEST_WD7TZCMQV7";

    const PASSWORD = "H5EQMQSHSURJNQ7UH2R78YAH6UN54ZP7";

    const ContractCode = 2957982769;

    public function getHeaderAuthorization(Type $var = null)
    {
        return "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c";

    }
    private function getTransactionUrl()
    {
        return $this->get('https://sandbox.monnify.com/api/v1/merchant/transactions/query');
    }

    private  function getRervserAccountDetails()
    {
       return $this->get('https://sandbox.monnify.com/api/v1/bank-transfer/reserved-accounts/reference12345');
    }

    public function getAccount()
    {
        
    }

    public function reverseAccount()
    {
        
    }

    public function deactiveAccount()
    {
        
    }

    public function getTransactionStatus()
    {
        
    }
}