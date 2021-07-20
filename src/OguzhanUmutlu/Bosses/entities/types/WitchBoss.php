<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class WitchBoss extends BossEntity {
    public const NETWORK_ID = self::WITCH;
    public function getName(): string {
        return "WitchBoss";
    }
}