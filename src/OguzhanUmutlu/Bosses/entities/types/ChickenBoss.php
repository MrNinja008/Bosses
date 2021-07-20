<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class ChickenBoss extends BossEntity {
    public const NETWORK_ID = self::CHICKEN;
    public function getName(): string {
        return "ChickenBoss";
    }
}