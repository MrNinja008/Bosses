<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class MuleBoss extends BossEntity {
    public const NETWORK_ID = self::MULE;
    public function getName(): string {
        return "MuleBoss";
    }
}