<?php
namespace HonAPI;
class MatchHistory extends Request
{	
	 use MethodMatches, PropertiesPlayer;

	 public function __construct($token)
	 {	
		  parent::__construct($token);
		  $this->setController('match_history');
	 }
}
