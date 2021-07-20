<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class ZombieHorseBoss extends BossEntity {
    public const NETWORK_ID = self::ZOMBIE_HORSE;
    public function getName(): string {
        return "ZombieHorseBoss";
    }
}