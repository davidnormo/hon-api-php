<?php
namespace HonAPI;
class Match extends Request
{
	 use PropertiesPlayer;

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
	  * Get match statistics
	  */
	 public function getStatistics()
	 {
		  $this->setMethod('statistics');
		  return $this;
	 }

	 /**
	  * Get match summary
	  */
	 public function getSummary()
	 {
		  $this->setMethod('summary');
		  return $this;
	 }

	 /**
	  * Get all match statistics
	  */
	 public function getAll()
	 {
		  $this->setMethod('all');
		  return $this;
	 }
}
