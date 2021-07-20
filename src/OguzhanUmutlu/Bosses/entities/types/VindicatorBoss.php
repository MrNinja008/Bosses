<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class VindicatorBoss extends BossEntity {
    public const NETWORK_ID = self::VINDICATOR;
    public function getName(): string {
        return "VindicatorBoss";
    }
}