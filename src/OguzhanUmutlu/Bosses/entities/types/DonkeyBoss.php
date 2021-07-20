<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class DonkeyBoss extends BossEntity {
    public const NETWORK_ID = self::DONKEY;
    public function getName(): string {
        return "DonkeyBoss";
    }
}