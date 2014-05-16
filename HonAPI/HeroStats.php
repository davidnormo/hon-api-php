<?php
namespace HonAPI;
class HeroStats extends Request
{
	use MethodMatches, PropertiesPlayer;

	public function __construct($token)
	{
		parent::__construct($token);
		$this->setController('hero_statistics');
	}

	public function setHeroId($id)
	{
		$this->setProperty('heroid', $id);
		return $this;
	}
	public function setHeroName($name)
	{
		$this->setProperty('name', $name);
		return $this;
	} 
}
