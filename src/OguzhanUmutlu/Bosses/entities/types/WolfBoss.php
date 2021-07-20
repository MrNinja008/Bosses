<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class WolfBoss extends BossEntity {
    public const NETWORK_ID = self::WOLF;
    public function getName(): string {
        return "WolfBoss";
    }
}