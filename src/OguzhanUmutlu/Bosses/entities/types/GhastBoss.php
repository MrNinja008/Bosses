<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class GhastBoss extends BossEntity {
    public const NETWORK_ID = self::GHAST;
    public function getName(): string {
        return "GhastBoss";
    }
}