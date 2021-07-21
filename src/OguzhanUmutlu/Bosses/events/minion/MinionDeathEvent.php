<?php

namespace OguzhanUmutlu\Bosses\events\minion;

use OguzhanUmutlu\Bosses\entities\BossEntity;
use OguzhanUmutlu\Bosses\events\MinionEvent;

class MinionDeathEvent extends MinionEvent {
    private $drops;
    public function __construct(BossEntity $minion, array $drops) {
        $this->drops = $drops;
        parent::__construct($minion);
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