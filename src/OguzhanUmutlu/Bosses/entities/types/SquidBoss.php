<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class SquidBoss extends BossEntity {
    public const NETWORK_ID = self::SQUID;
    public function getName(): string {
        return "SquidBoss";
    }
}