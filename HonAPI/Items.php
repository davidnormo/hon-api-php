<?php
namespace HonAPI;
class Items extends Request
{
	use PropertiesIdentify, MethodUsage;

	public function __construct($token)
	{
		parent::__construct($token);
		$this->setController('items');
		$this->setMethod('all');
	}
}
