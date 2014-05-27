<?php
class MatchHistoryTest extends PHPUnit_Framework_TestCase
{
	 public function setUp()
	 {
		  $client = new \HonAPI\HonClient(123);
		  $this->matchHistory = $client->getMatchHistory();
	 }

	 public function testRankedId()
	 {
		$expected = 'https://api.heroesofnewerth.com/'.
			 'match_history/ranked/accountid/123456/?token=123';

		$this->matchHistory->byAccountId(123456);
		$url = $this->matchHistory->getRequestUri();
		$this->assertEquals($expected, $url);

		$this->setUp();
		
		$this->matchHistory->byAccountId(123456)->getRanked();
		$url = $this->matchHistory->getRequestUri();
		$this->assertEquals($expected, $url);

		$this->setUp();
		
		$this->matchHistory->getRanked()->byAccountId(123456);
		$url = $this->matchHistory->getRequestUri();
		$this->assertEquals($expected, $url);
	 }
}
