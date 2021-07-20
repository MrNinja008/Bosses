<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class CowBoss extends BossEntity {
    public const NETWORK_ID = self::COW;
    public function getName(): string {
        return "CowBoss";
    }
}