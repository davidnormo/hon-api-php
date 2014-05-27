<?php
class HeroStatsTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$client = new \HonAPI\HonClient(123);
		$this->heroStats = $client->getHeroStats();
	}

	/**
	 * Test hero statistics on ranked matches, from a user id and hero id
	 */
	public function testRankedIdHeroId()
	{
		 $expected = 'https://api.heroesofnewerth.com/'.
			  'hero_statistics/ranked/accountid/123456/heroid/1/?token=123';

		 $this->heroStats->byAccountId(123456)->setHeroId(1);	  
		 $url = $this->heroStats->getRequestUri();
		 $this->assertEquals($expected, $url);
		 
		 $this->setUp();

		 $this->heroStats->getRanked()->byAccountId(123456)->setHeroId(1);
		 $url = $this->heroStats->getRequestUri();
		 $this->assertEquals($expected, $url);

		 $this->setUp();
		 
		 $expected = 'https://api.heroesofnewerth.com/'.
			  'hero_statistics/ranked/heroid/1/accountid/123456/?token=123';

		 $this->heroStats->setHeroId(1)->getRanked()->byAccountId(123456);
		 $url = $this->heroStats->getRequestUri();
		 $this->assertEquals($expected, $url);
	}

	/**
	 * Test hero stats on causual match, for a nickname and hero name
	 */
	public function testCasualNicknameHeroName()
	{
		 $expected = 'https://api.heroesofnewerth.com/hero_statistics/'.
			  'casual/nickname/testor3/name/Accursed/?token=123';

		 $this->heroStats->byNickname('testor3')->getCasual()->setHeroName('Accursed');	  
		 $url = $this->heroStats->getRequestUri();
		 $this->assertEquals($expected, $url);
		 
		 $this->setUp();

		 $expected = 'https://api.heroesofnewerth.com/'.
			  'hero_statistics/casual/name/Accursed/nickname/testor3/?token=123';

		 $this->heroStats->setHeroName('Accursed')->getCasual()->byNickname('testor3');	  
		 $url = $this->heroStats->getRequestUri();
		 $this->assertEquals($expected, $url);
	}
}
