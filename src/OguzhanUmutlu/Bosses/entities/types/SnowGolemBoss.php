<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class SnowGolemBoss extends BossEntity {
    public const NETWORK_ID = self::SNOW_GOLEM;
    public function getName(): string {
        return "SnowGolemBoss";
    }
}