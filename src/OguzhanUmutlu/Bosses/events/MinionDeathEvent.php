<?php

namespace OguzhanUmutlu\Bosses\events;

use OguzhanUmutlu\Bosses\entities\BossEntity;
use pocketmine\event\Event;

class MinionDeathEvent extends Event {
    private $minion;
    private $drops;
    public function __construct(BossEntity $minion, array $drops) {
        $this->minion = $minion;
        $this->drops = $drops;
    }

    /*** @return BossEntity */
    public function getMinion(): BossEntity {
        return $this->minion;
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