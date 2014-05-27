<?php
namespace HonAPI;
trait MethodUsage
{
	use MethodAll;

	public function setUsage()
	{
		$this->setMethod('usage');
		return $this;
	}
}
