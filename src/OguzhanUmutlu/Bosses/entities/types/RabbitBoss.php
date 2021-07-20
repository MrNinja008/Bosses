<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class RabbitBoss extends BossEntity {
    public const NETWORK_ID = self::RABBIT;
    public function getName(): string {
        return "RabbitBoss";
    }
}