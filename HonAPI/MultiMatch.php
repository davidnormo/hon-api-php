<?php
namespace HonAPI;
class MultiMatch extends Request
{
	 use MethodStatistics;

	 /**
	  * New Multi-Match request
	  * Defaults to fetch all details
	  */
	 public function __construct($token)
	 {
		  parent::__construct($token);
		  $this->setController('multi_match');
		  $this->setMethod('all');
	 }

	 /**
	  * Fetches the data for each match id in $ids
	  *
	  * @param Array $ids
	  */
	 public function setMatchIds(array $ids)
	 {
		  $this->setProperty('matchids', implode(' ', $ids));
		  return $this;
	 }
}
