# Bosses
[![](https://poggit.pmmp.io/shield.state/Bosses)](https://poggit.pmmp.io/p/Bosses)
[![](https://poggit.pmmp.io/shield.api/Bosses)](https://poggit.pmmp.io/p/Bosses)
[![](https://poggit.pmmp.io/shield.dl.total/Bosses)](https://poggit.pmmp.io/p/Bosses)
[![](https://poggit.pmmp.io/shield.dl/Bosses)](https://poggit.pmmp.io/p/Bosses)

Custom boss plugin for PocketMine-MP.

# What is this plugin?

This plugin adds entities that they have so much things to configure!

# How to create boss?

Type `/boss` and select `Create new Boss`

Select `Spawn now?`

Select boss's attributes and press `Create` at the bottom of the menu

# How to make a boss auto spawn?

Simply type `/boss` and if you are creating new boss press `Create new Boss` and type the second amount to `Auto spawn countdown(seconds)`.

Example: 10

If you are not creating new boss click to `Manage existing Boss` and select your boss.

Type the second amount to `Auto spawn countdown(seconds)`

# API

How to get most damager(s) of boss?

```php

/** @var BossEntity $boss */
$killers = $boss->mostDamages;
/*
 * [
 *   firstPlayerName => damage
 *   secondPlayerName => damage
 *   .....
 *   lastPlayerName => damage
 * ]
 * */
$firstPlayerName = array_keys($killers)[0];
$firstPlayer = $killers[$firstPlayerName];

$secondPlayerName = array_keys($killers)[1];
$secondPlayer = $killers[$secondPlayerName];
```

***

How to get **online** most damager(s) of boss?

```php

/** @var BossEntity $boss */
$killers = $boss->getOnlineDamagePlayers();
/*
 * [
 *   firstPlayerName => damage
 *   secondPlayerName => damage
 *   .....
 *   lastPlayerName => damage
 * ]
 * */
$firstPlayerName = array_keys($killers)[0];
$firstPlayer = $killers[$firstPlayerName];

$secondPlayerName = array_keys($killers)[1];
$secondPlayer = $killers[$secondPlayerName];
```

***

How to add death listener for a single boss?

```php
use pocketmine\Server;
use OguzhanUmutlu\Bosses\entities\BossEntity;
```

```php
/** @var BossEntity $boss */
$boss->onDie[] = function() {
    $onlineDamagers = $boss->getOnlineDamagePlayers();
    $firstPlayerName = array_keys($onlineDamagers)[0];
    Server::getInstance()->broadcastMessage(
        "Boss's most damager is $firstPlayerName!"
    );
};
```

***

How to add death listener for a single boss?

```php
use pocketmine\Server;
use OguzhanUmutlu\Bosses\entities\BossEntity;
```

```php
/** @var BossEntity $boss */
$boss->onDie[] = function() {
    $onlineDamagers = $boss->getOnlineDamagePlayers();
    $firstPlayerName = array_keys($onlineDamagers)[0];
    Server::getInstance()->broadcastMessage(
        "Boss's most damager is $firstPlayerName!"
    );
};
```

***

How to add death listener for a single boss?

```php
use pocketmine\Server;
use OguzhanUmutlu\Bosses\entities\BossEntity;
```

```php
/** @var BossEntity $boss */
$boss->onDie[] = function() {
    $onlineDamagers = $boss->getOnlineDamagePlayers();
    $firstPlayerName = array_keys($onlineDamagers)[0];
    Server::getInstance()->broadcastMessage(
        "Boss's most damager is $firstPlayerName!"
    );
};
```

Events:

```php
use OguzhanUmutlu\Bosses\events\boss\BossDeathEvent;
use OguzhanUmutlu\Bosses\events\boss\BossShootEvent;
use OguzhanUmutlu\Bosses\events\boss\BossDamageEvent;
use OguzhanUmutlu\Bosses\events\minion\MinionDeathEvent;
use OguzhanUmutlu\Bosses\events\minion\MinionShootEvent;
use OguzhanUmutlu\Bosses\events\minion\MinionDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
```

```php
/** @var BossDeathEvent|BossShootEvent|BossDamageEvent $event */
$boss = $event->getBoss();

/** @var MinionDeathEvent|MinionShootEvent|MinionDamageEvent $event */
$minion = $event->getMinion();

/** @var BossDeathEvent|MinionDeathEvent $event */
$drops = $event->getDrops();

/** @var BossDeathEvent|MinionDeathEvent $event */
$event->setDrops($drops);

/** @var BossShootEvent|MinionShootEvent $event */
$projectile = $event->getProjectile();

/** @var BossShootEvent|MinionShootEvent $event */
$event->setProjectile($projectile);

/** @var EntityDamageByEntityEvent $damage */
/** @var BossDamageEvent $event */
$damage = $event->getDamage();
```


# TODO
- more attributes
- add Fly AI

# Reporting bugs
**You may open an issue on the Bosses GitHub repository for report bugs**
https://github.com/OguzhanUmutlu/Bosses/issues
