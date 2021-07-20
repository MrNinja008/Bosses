<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class ElderGuardianBoss extends BossEntity {
    public const NETWORK_ID = self::ELDER_GUARDIAN;
    public function getName(): string {
        return "ElderGuardianBoss";
    }
}