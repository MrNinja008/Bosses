<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class StrayBoss extends BossEntity {
    public const NETWORK_ID = self::STRAY;
    public function getName(): string {
        return "StrayBoss";
    }
}