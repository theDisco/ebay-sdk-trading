<?php

use DTS\eBaySDK\Trading\Types\MinItemCompatibilityDefinitionType;

class MinItemCompatibilityDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MinItemCompatibilityDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\MinItemCompatibilityDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
