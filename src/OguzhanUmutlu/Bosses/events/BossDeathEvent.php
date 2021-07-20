<?php

namespace OguzhanUmutlu\Bosses\events;

use OguzhanUmutlu\Bosses\entities\BossEntity;
use pocketmine\event\Event;

class BossDeathEvent extends Event {
    private $boss;
    private $drops;
    public function __construct(BossEntity $boss, array $drops) {
        $this->boss = $boss;
        $this->drops = $drops;
    }

    /*** @return BossEntity */
    public function getBoss(): BossEntity {
        return $this->boss;
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