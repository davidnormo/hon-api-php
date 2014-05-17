<?php
namespace HonAPI;
class HeroStats extends Request
{
	use MethodMatches, PropertiesPlayer;

	/**
	 * Construct Hero Statistics object
	 * Defaults to ranked matches
	 *
	 * @param String $token
	 */
	public function __construct($token)
	{
		parent::__construct($token);
		$this->setController('hero_statistics');
		$this->setMethod('ranked');
	}

	/**
	 * Set the hero id number
	 *
	 * @param String|Int $id
	 */
	public function setHeroId($id)
	{
		$this->setProperty('heroid', $id);
		return $this;
	}

	/**
	 * Set the hero name
	 *
	 * @param String $name e.g. "Witch Slayer"
	 */
	public function setHeroName($name)
	{
		$this->setProperty('name', $name);
		return $this;
	} 
}
