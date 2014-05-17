<?php
namespace HonAPI;
class HonClient
{
	 private $token;

	 /**
	  * Construct the Hon API Client
	  *
	  * @param String $token Your API Token
	  */
	 public function __construct($token)
	 {
		  $this->token = $token;
	 }

	 /**
	  * Start a Player Statistics call
	  *
	  * @return HonAPI\PlayerStats
	  */
	 public function getPlayerStats()
	 {
		return new PlayerStats($this->token);
	 }

	 /**
	  * Start a Hero Statistics call
	  *
	  * @return HonAPI\HeroStats
	  */
	 public function getHeroStats()
	 {
		return new HeroStats($this->token);
	 }

	 /**
	  * Start a Match History call
	  *
	  * @return HonAPI\MatchHistory
	  */ 
	 public function getMatchHistory()
	 {
		return new MatchHistory($this->token);
	 }
	 	
	 /**
	  * Start a Match call
	  *
	  * @return HonAPI\Match
	  */
	 public function getMatch()
	 {
		return new Match($this->token);
	 }
}
