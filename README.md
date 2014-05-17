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

## Roadmap

1.0.x
	- Finish API: 
		- Match
		- Multi-Match
		- Heroes 
		- Items
	- Add Error/Exception handling

1.1.x
	- Add response objects:
		- Player Statistics
		- Hero Statistics
		- Match History
		- Match
		- Hero
		- Item
