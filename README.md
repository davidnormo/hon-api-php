# HoN Statistics API PHP

A PHP lib for the HoN Statistics API.

Usage:
```php
use HonAPI;
$client = new HonClient();
//get ranked player stats for testor3
$client->getPlayerStats()
	   ->byNickname('testor3');
```
