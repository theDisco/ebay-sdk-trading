<?php

use DTS\eBaySDK\Trading\Types\LocalListingDistancesNonSubscriptionDefinitionType;

class LocalListingDistancesNonSubscriptionDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new LocalListingDistancesNonSubscriptionDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\LocalListingDistancesNonSubscriptionDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
