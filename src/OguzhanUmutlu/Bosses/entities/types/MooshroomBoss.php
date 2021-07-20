<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class MooshroomBoss extends BossEntity {
    public const NETWORK_ID = self::MOOSHROOM;
    public function getName(): string {
        return "MooshroomBoss";
    }
}