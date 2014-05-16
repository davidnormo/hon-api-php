<?php
namespace HonAPI;
/**
 * Commonly used Model Methods
 */
trait MethodMatches 
{
	
	 /**
	  * Get ranked matches
	  *
	  * @return HonAPI\PlayerStats
	  */
	 public function getRanked()
	 {
		  $this->setMethod('ranked');
		  return $this;
	 }

	 /**
	  * Get casual matches
	  *
	  * @return HonAPI\PlayerStats
	  */
	 public function getCasual()
	 {
		  $this->setMethod('casual');
		  return $this;
	 }

	 /**
	  * Get public match stats
	  *
	  * @return HonAPI\PlayerStats
	  */
	 public function getPublic()
	 {
		  $this->setMethod('public');
		  return $this;
	 }

	 /**
	  * Get all match type stats
	  *
	  * @return HonAPI\PlayerStats
	  */
	 public function getAll()
	 {
		  $this->setMethod('all');
		  return $this;
	 }
}
