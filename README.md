hon-api-php
===========

A PHP lib for the HoN Statistics API.

Usage:
```php
use HonAPI;
$client = new HonClient();
$client->getPlayerStats()
	   ->byNickname('testor3')
	   ->getRanked();
```
