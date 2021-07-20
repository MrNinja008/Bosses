<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class GuardianBoss extends BossEntity {
    public const NETWORK_ID = self::GUARDIAN;
    public function getName(): string {
        return "GuardianBoss";
    }
}