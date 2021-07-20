<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class EndermiteBoss extends BossEntity {
    public const NETWORK_ID = self::ENDERMITE;
    public function getName(): string {
        return "EndermiteBoss";
    }
}