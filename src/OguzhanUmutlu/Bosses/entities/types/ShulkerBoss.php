<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class ShulkerBoss extends BossEntity {
    public const NETWORK_ID = self::SHULKER;
    public function getName(): string {
        return "ShulkerBoss";
    }
}