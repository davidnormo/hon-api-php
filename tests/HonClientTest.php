<?php
require_once 'HonAPI/autoload.php';
class HonClientTest extends PHPUnit_Framework_TestCase
{
	/**
	 * HonClient is instantiable
	 */
	public function testIsInstantiable()
	{
		 $client = new \HonAPI\HonClient(123);
		 $this->assertInstanceOf('HonAPI\HonClient', $client);
	}

	/**
	 * PlayerStats object returned from HonClient::getPlayerStats
	 */
	public function testGetPlayerStats()
	{
		 $client = new \HonAPI\HonClient(123);
		 $this->assertInstanceOf('HonAPI\PlayerStats', $client->getPlayerStats());
	}
}
