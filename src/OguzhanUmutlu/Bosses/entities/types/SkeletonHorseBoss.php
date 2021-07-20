<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class SkeletonHorseBoss extends BossEntity {
    public const NETWORK_ID = self::SHEEP;
    public function getName(): string {
        return "SkeletonHorseBoss";
    }
}