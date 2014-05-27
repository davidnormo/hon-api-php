<?php
namespace HonAPI;
class Heroes extends Request
{
	use PropertiesIdentify, MethodUsage;

	public function __construct($token)
	{
		parent::_construct($token);
		$this->setController('heroes');
		$this->setMethod('all');
	}
}
