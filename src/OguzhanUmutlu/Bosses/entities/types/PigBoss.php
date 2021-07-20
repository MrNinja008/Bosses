<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class PigBoss extends BossEntity {
    public const NETWORK_ID = self::PIG;
    public function getName(): string {
        return "PigBoss";
    }
}