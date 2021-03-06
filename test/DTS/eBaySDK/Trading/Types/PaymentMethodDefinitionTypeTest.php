<?php

use DTS\eBaySDK\Trading\Types\PaymentMethodDefinitionType;

class PaymentMethodDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentMethodDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\PaymentMethodDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
