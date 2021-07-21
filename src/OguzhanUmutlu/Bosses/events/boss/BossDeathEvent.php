<?php

namespace OguzhanUmutlu\Bosses\events\boss;

use OguzhanUmutlu\Bosses\entities\BossEntity;
use OguzhanUmutlu\Bosses\events\BossEvent;

class BossDeathEvent extends BossEvent {
    private $drops;
    public function __construct(BossEntity $boss, array $drops) {
        $this->drops = $drops;
        parent::__construct($boss);
    }

    /*** @return array */
    public function getDrops(): array {
        return $this->drops;
    }

    /*** @param array $drops */
    public function setDrops(array $drops): void {
        $this->drops = $drops;
    }
}