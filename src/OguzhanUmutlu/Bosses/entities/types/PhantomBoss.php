<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class PhantomBoss extends BossEntity {
    public const NETWORK_ID = self::PHANTOM;
    public function getName(): string {
        return "PhantomBoss";
    }
}