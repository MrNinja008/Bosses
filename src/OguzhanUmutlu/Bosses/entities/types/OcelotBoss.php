<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class OcelotBoss extends BossEntity {
    public const NETWORK_ID = self::OCELOT;
    public function getName(): string {
        return "OcelotBoss";
    }
}