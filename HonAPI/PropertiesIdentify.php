<?php
namespace HonAPI;
trait PropertiesIdentify
{
	public function setName($name)
	{
		$this->setMethod('name/'.$name);
		return $this;
	}

	public function setId($id)
	{
		$this->setMethod('id/'.$id);
		return $this;
	}
}
