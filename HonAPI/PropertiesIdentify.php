<?php
namespace HonAPI;
trait PropertiesIdentify
{
	public function setName($name)
	{
		$this->setProperty('name', $name);
		return $this;
	}

	public function setId($id)
	{
		$this->setProperty('id', $id);
		return $this;
	}
}
