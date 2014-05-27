<?php
class MethodUsageTest extends PHPUnit_Framework_TestCase
{
	public function testSetUsage()
	{
		 $stub = new MethodUsageStub(123);
		 $stub->setUsage();
		 $method = $stub->getMethod();
		 $this->assertEquals('usage', $method);
	}
}

class MethodUsageStub extends \HonAPI\Request
{
	use \HonAPI\MethodUsage;
}
