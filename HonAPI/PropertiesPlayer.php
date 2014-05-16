<?php
namespace HonAPI;
trait PropertiesPlayer {

	 /**
	  * Set the account id of the player
	  *
	  * @param Int $id The account Id
	  */
	 public function byAccountId($id)
	 {
		  $this->setProperty('accountid', $id);
		  return $this;
	 }

	 /**
	  * Set the nickname of the player
	  *
	  * @param String $nickname The nickname of the player
	  */
	 public function byNickname($nickname)
	 {
		  $this->setProperty('nickname', $nickname);
		  return $this;
	 }
}
