<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class ZombieVillager extends BossEntity {
    public const NETWORK_ID = self::ZOMBIE_VILLAGER;
    public function getName(): string {
        return "ZombieVillager";
    }
}