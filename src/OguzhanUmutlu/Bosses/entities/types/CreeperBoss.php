<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class CreeperBoss extends BossEntity {
    public const NETWORK_ID = self::CREEPER;
    public function getName(): string {
        return "CreeperBoss";
    }
}