<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class CaveSpiderBoss extends BossEntity {
    public const NETWORK_ID = self::CAVE_SPIDER;
    public function getName(): string {
        return "CaveSpiderBoss";
    }
}