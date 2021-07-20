<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class ParrotBoss extends BossEntity {
    public const NETWORK_ID = self::PARROT;
    public function getName(): string {
        return "ParrotBoss";
    }
}