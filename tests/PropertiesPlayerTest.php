<?php
class PropertiesPlayerTest extends PHPUnit_Framework_TestCase
{
	 /**
	  * Setup the PropertiesPlayer trait stub.
	  */
	 public function setUp()
	 {
		  $this->player = new PropertiesPlayerStub(123);
	 }

	 /**
	  * Test PropertiesPlayer::byAccountId
	  */
	 public function testByAccountId()
	 {	    
		  $this->player->byAccountId(1);
		  $props = $this->player->getProperties();
		  $this->assertEquals(1, array_values($props)[0]);
		  $this->assertEquals('accountid', array_keys($props)[0]);
	 }

	 /**
	  * Test PropertiesPlayer::byNickname
	  */
	 public function testByNickname()
	 {
		  $this->player->byNickname('test');
		  $props = $this->player->getProperties();
		  $this->assertEquals('test', array_values($props)[0]);
		  $this->assertEquals('nickname', array_keys($props)[0]);
	 }
}

class PropertiesPlayerStub extends \HonAPI\Request
{
	use \HonApi\PropertiesPlayer;
}
