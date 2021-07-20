<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class WitherSkeletonBoss extends BossEntity {
    public const NETWORK_ID = self::WITHER_SKELETON;
    public function getName(): string {
        return "WitherSkeletonBoss";
    }
}