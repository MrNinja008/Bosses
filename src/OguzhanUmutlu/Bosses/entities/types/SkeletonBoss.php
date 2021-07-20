<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class SkeletonBoss extends BossEntity {
    public const NETWORK_ID = self::SKELETON;
    public function getName(): string {
        return "SkeletonBoss";
    }
}