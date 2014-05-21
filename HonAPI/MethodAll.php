<?php
namespace HonAPI;
trait MethodAll 
{
	 /**
	  * Get all match statistics
	  */
	 public function getAll()
	 {
		  $this->setMethod('all');
		  return $this;
	 }
}
