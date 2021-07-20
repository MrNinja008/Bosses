<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class NPCBoss extends BossEntity {
    public const NETWORK_ID = self::NPC;
    public function getName(): string {
        return "NPCBoss";
    }
}