<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class BatBoss extends BossEntity {
    public const NETWORK_ID = self::BAT;
    public function getName(): string {
        return "BatBoss";
    }
}