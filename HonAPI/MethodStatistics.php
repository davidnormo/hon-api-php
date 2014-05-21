<?php
namespace HonAPI;
trait MethodStatistics
{	
	 use MethodAll;

	 /**
	  * Get match statistics
	  */
	 public function getStatistics()
	 {
		  $this->setMethod('statistics');
		  return $this;
	 }
}
