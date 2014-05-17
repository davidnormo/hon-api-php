<?php
namespace HonAPI;
class PlayerStats extends Request
{
	 use MethodMatches, PropertiesPlayer;

	 public function __construct($token)
	 {	
		  parent::__construct($token);
		  $this->setController('player_statistics');
		  $this->setMethod('ranked');
	 }
}
