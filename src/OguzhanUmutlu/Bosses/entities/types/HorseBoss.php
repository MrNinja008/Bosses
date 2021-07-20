<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class HorseBoss extends BossEntity {
    public const NETWORK_ID = self::HORSE;
    public function getName(): string {
        return "HorseBoss";
    }
}