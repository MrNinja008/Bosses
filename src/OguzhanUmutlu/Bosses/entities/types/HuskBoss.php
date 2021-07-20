<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class HuskBoss extends BossEntity {
    public const NETWORK_ID = self::HUSK;
    public function getName(): string {
        return "HuskBoss";
    }
}