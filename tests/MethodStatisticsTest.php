<?php
class MethodStatistcsTest extends PHPUnit_Framework_TestCase
{
	public function testGetStatistics()
	{
		$stub = new MethodStatisticsStub(123);
		$stub->getStatistics();
		$method = $stub->getMethod();

		$this->assertEquals('statistics', $method);
	}
}

class MethodStatisticsStub extends \HonApi\Request
{
	use \HonAPI\MethodStatistics;
}
