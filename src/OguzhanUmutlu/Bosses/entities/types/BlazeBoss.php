<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class BlazeBoss extends BossEntity {
    public const NETWORK_ID = self::BLAZE;
    public function getName(): string {
        return "BlazeBoss";
    }
}