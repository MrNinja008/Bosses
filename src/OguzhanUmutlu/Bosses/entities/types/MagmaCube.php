<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class MagmaCube extends BossEntity {
    public const NETWORK_ID = self::MAGMA_CUBE;
    public function getName(): string {
        return "MagmaCube";
    }
}