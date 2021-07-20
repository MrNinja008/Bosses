<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class DolphinBoss extends BossEntity {
    public const NETWORK_ID = self::DOLPHIN;
    public function getName(): string {
        return "DolphinBoss";
    }
}