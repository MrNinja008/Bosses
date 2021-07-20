<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class WitherBoss extends BossEntity {
    public const NETWORK_ID = self::WITHER;
    public function getName(): string {
        return "WitherBoss";
    }
}