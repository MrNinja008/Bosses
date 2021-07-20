<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class PolarBearBoss extends BossEntity {
    public const NETWORK_ID = self::POLAR_BEAR;
    public function getName(): string {
        return "PolarBearBoss";
    }
}