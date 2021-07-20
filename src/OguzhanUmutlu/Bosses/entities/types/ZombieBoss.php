<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class ZombieBoss extends BossEntity {
    public const NETWORK_ID = self::ZOMBIE;
    public function getName(): string {
        return "ZombieBoss";
    }
}