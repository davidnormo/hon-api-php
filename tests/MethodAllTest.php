<?php
class MethodAllTest extends PHPUnit_Framework_TestCase
{
	public function testGetAll()
	{
		$stub = new MethodAllStub(123);
		$stub->getAll();
		$method = $stub->getMethod();

		$this->assertEquals('all', $method);
	}
}

class MethodAllStub extends \HonApi\Request
{
	use \HonAPI\MethodAll;
}
