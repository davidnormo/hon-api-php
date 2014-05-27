<?php
class PlayerStatsTest extends PHPUnit_Framework_TestCase
{
	 public function setUp()
	 {
		  $client = new \HonAPI\HonClient(123);
		  $this->playerStats = $client->getPlayerStats();
	 }

	 /**
	  * Test for correct uri for ranked and account id
	  */
	 public function testRankedIdUri()
	 {
		  $expected = 'https://api.heroesofnewerth.com/'.
			   'player_statistics/ranked/accountid/123456/?token=123';

		  $this->playerStats->getRanked()->byAccountId(123456);
		  $uri = $this->playerStats->getRequestUri();
		  $this->assertEquals($expected, $uri);

		  $this->setUp();

		  //reversed order of method calls
		  $this->playerStats->byAccountId(123456)->getRanked();
		  $uri = $this->playerStats->getRequestUri();
		  $this->assertEquals($expected, $uri);

		  $this->setUp();

		  //alternatively defaults to ranked
		  $this->playerStats->byAccountId(123456);
		  $uri = $this->playerStats->getRequestUri();
		  $this->assertEquals($expected, $uri);
	 }

	 /**
	  * Test for correct uri for casual and account id
	  */
	 public function testCasualNicknameUri()
	 {
		  $expected = 'https://api.heroesofnewerth.com/'.
			   'player_statistics/casual/nickname/testor3/?token=123';

		  $this->playerStats->getCasual()->byNickname('testor3');
		  $uri = $this->playerStats->getRequestUri();
		  $this->assertEquals($expected, $uri);

		  $this->setUp();

		  $this->playerStats->byNickname('testor3')->getCasual();
		  $uri = $this->playerStats->getRequestUri();
		  $this->assertEquals($expected, $uri);
	 }

	 /**
	  * Test for correct uri for public and account id
	  */
	 public function testPublicIdUri()
	 {
		  $expected = 'https://api.heroesofnewerth.com/'.
			   'player_statistics/public/accountid/123456/?token=123';

		  $this->playerStats->getPublic()->byAccountId(123456);
		  $uri = $this->playerStats->getRequestUri();
		  $this->assertEquals($expected, $uri);

		  $this->setUp();

		  $this->playerStats->byAccountId(123456)->getPublic();
		  $uri = $this->playerStats->getRequestUri();
		  $this->assertEquals($expected, $uri);	
	 }

	 public function testAllNicknameUri()
	 {
		  $expected = 'https://api.heroesofnewerth.com/'.
			   'player_statistics/all/nickname/testor3/?token=123';

		  $this->playerStats->getAll()->byNickname('testor3');
		  $uri = $this->playerStats->getRequestUri();
		  $this->assertEquals($expected, $uri);

		  $this->setUp();

		  $this->playerStats->byNickname('testor3')->getAll();
		  $uri = $this->playerStats->getRequestUri();
		  $this->assertEquals($expected, $uri);	
	 }
}
