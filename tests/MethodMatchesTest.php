<?php
require_once 'HonAPI/autoload.php';
class MethodMatchesTest extends PHPUnit_Framework_TestCase
{	
	 /**
	  * Setup the PropertiesPlayer trait stub.
	  */
	 public function setUp()
	 {
		  $this->match = new MethodMatchesStub(123);
	 }

	 public function testGetRanked()
	 {
		$this->match->getRanked();
		$this->assertEquals('ranked', $this->match->getMethod());
	 }
}

class MethodMatchesStub extends \HonAPI\Request
{
	use \HonAPI\MethodMatches;
}
