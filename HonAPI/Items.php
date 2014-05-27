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

	/**
	 * Restrict request to within a certain shop
	 * 
	 * @param String $name
	 */
	public function setShopName($name)
	{
		$this->setMethod('shop');
		$this->setProperty('name', $name);	
		return $this;
	}

	/**
	 * Restrict by shop slot number
	 *
	 * @param Int|String $slotNum
	 */
	public function setShopSlot($slotNum)
	{
		$this->setMethod('shop');
		$this->setProperty('slot', $slotNum);
		return $this;
	}

	/**
	 * Get all items categorised by shop
	 */
	public function setShopAll()
	{
		$this->setMethod('shop/all');
		return $this;
	}
}
