<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class SlimeBoss extends BossEntity {
    public const NETWORK_ID = self::SLIME;
    public function getName(): string {
        return "SlimeBoss";
    }
}