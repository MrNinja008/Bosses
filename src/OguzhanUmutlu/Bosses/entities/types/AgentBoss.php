<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class AgentBoss extends BossEntity {
    public const NETWORK_ID = self::AGENT;
    public function getName(): string {
        return "AgentBoss";
    }
}