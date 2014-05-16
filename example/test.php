<?php
require 'HonAPI/autoload.php';
spl_autoload_register('autoload');

use HonAPI\HonClient;

$client = new HonClient(YOUR_TOKEN_HERE);
$client->getPlayerStats()
	   ->byNickname('angrytestie')
	   ->getRanked()
	   ->fetch();
echo '<br />';
$client->getHeroStats()
	   ->byNickname('angrytestie')
	   ->getRanked()
	   ->setHeroName('Wich Slayer')
	   ->fetch();

