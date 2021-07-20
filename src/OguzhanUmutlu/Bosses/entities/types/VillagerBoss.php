<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class VillagerBoss extends BossEntity {
    public const NETWORK_ID = self::VILLAGER;
    public function getName(): string {
        return "VillagerBoss";
    }
}