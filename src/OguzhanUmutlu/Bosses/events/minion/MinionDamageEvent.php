<?php

namespace OguzhanUmutlu\Bosses\events\minion;

use OguzhanUmutlu\Bosses\entities\BossEntity;
use OguzhanUmutlu\Bosses\events\MinionEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;

class MinionDamageEvent extends MinionEvent {
    private $damage;
    public function __construct(BossEntity $minion, EntityDamageByEntityEvent $event) {
        $this->damage = $event;
        parent::__construct($minion);
    }

    /*** @return EntityDamageByEntityEvent */
    public function getDamage(): EntityDamageByEntityEvent {
        return $this->damage;
    }
}