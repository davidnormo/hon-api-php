<?php
class PropertiesIdentifyTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->stub = new PropertiesIdentifyStub(123);
	}

	public function testSetId()
	{
		$this->stub->setId(1);
		$props = $this->stub->getProperties();
		$this->assertEquals('id', array_keys($props)[0]);
		$this->assertEquals(1, array_values($props)[0]);
	}
	
	public function testSetName()
	{
		$this->stub->setName('thisisaname');
		$props = $this->stub->getProperties();
		$this->assertEquals('name', array_keys($props)[0]);
		$this->assertEquals('thisisaname', array_values($props)[0]);
	}
}

class PropertiesIdentifyStub extends \HonAPI\Request
{
	use \HonAPI\PropertiesIdentify;
}
