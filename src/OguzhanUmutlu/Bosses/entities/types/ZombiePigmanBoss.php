<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class ZombiePigmanBoss extends BossEntity {
    public const NETWORK_ID = self::ZOMBIE_PIGMAN;
    public function getName(): string {
        return "ZombiePigmanBoss";
    }
}