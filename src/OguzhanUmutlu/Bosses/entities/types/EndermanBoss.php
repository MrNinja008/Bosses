<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class EndermanBoss extends BossEntity {
    public const NETWORK_ID = self::ENDERMAN;
    public function getName(): string {
        return "EndermanBoss";
    }
}