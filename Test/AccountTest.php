<?php
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    const USERNAME  = "MK_TEST_WD7TZCMQV7";

    const PASSWORD = "H5EQMQSHSURJNQ7UH2R78YAH6UN54ZP7";

    const ContractCode = 2957982769;

    public function ReserveAccount()
    {
        $array = [
            'username' => UserNAME,
            'password' => PASSWORD,
            'contract_code' => ContractCode
        ];
        var_dump($array);
        // $this->assertSame(0, count($stack));

        // array_push($stack, 'foo');
        // $this->assertSame('foo', $stack[count($stack)-1]);
        // $this->assertSame(1, count($stack));

        // $this->assertSame('foo', array_pop($stack));
        // $this->assertSame(0, count($stack));
    }
}