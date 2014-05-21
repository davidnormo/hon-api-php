<?php
namespace HonAPI;
class Match extends Request
{
	 use PropertiesPlayer, MethodStatistics;

	 /**
	  * Construct Match object
	  * Defaults to all statstics
	  *
	  * @param String $token
	  */
	 public function __construct($token)
	 {
		  parent::__construct($token);
		  $this->setController('match');
		  $this->setMethod('all');
	 }

	 /**
	  * Set the match id
	  *
	  * @param String|Int $id
	  */
	 public function setMatchId($id)
	 {
		  $this->setProperty('matchid', $id);
		  return $this;
	 }

	 /**
	  * Get match settings
	  */
	 public function getSettings()
	 {
		  $this->setMethod('settings');
		  return $this;
	 }

	 /**
	  * Get match inventory
	  */
	 public function getInventory()
	 {
		  $this->setMethod('inventory');
		  return $this;
	 }

	 /**
	  * Get match summary
	  */
	 public function getSummary()
	 {
		  $this->setMethod('summ');
		  return $this;
	 }
}
