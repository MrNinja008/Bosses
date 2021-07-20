<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class SpiderBoss extends BossEntity {
    public const NETWORK_ID = self::SPIDER;
    public function getName(): string {
        return "SpiderBoss";
    }
}