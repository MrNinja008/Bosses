<?php

namespace OguzhanUmutlu\Bosses\events\boss;

use OguzhanUmutlu\Bosses\entities\BossEntity;
use OguzhanUmutlu\Bosses\events\BossEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;

class BossDamageEvent extends BossEvent {
    private $damage;
    public function __construct(BossEntity $boss, EntityDamageByEntityEvent $event) {
        $this->damage = $event;
        parent::__construct($boss);
    }

    /*** @return EntityDamageByEntityEvent */
    public function getDamage(): EntityDamageByEntityEvent {
        return $this->damage;
    }
}