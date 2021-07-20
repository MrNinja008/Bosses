<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class IronGolemBoss extends BossEntity {
    public const NETWORK_ID = self::IRON_GOLEM;
    public function getName(): string {
        return "IronGolemBoss";
    }
}