<?php

namespace OguzhanUmutlu\Bosses\entities\types;

use OguzhanUmutlu\Bosses\entities\BossEntity;

class LlamaBoss extends BossEntity {
    public const NETWORK_ID = self::LLAMA;
    public function getName(): string {
        return "LlamaBoss";
    }
}