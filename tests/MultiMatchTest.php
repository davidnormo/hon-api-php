<?php
class MultiMatchTest extends PHPUnit_Framework_TestCase
{
	 public function testSetMatchIds()
	 {
		  $client = new \HonAPI\HonClient(123);
		  $matches = $client->getMultiMatch()
			   ->setMatchIds(array(1,2,3));
		  $props = $matches->getProperties();
		  $this->assertEquals('1+2+3', array_values($props)[0]);
		  $this->assertEquals('matchids', array_keys($props)[0]);
	 }
}
