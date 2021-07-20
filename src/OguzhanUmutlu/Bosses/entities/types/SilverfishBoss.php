<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class SilverfishBoss extends BossEntity {
    public const NETWORK_ID = self::SILVERFISH;
    public function getName(): string {
        return "SilverfishBoss";
    }
}