<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class EnderDragonBoss extends BossEntity {
    public const NETWORK_ID = self::ENDER_DRAGON;
    public function getName(): string {
        return "EnderDragonBoss";
    }
}