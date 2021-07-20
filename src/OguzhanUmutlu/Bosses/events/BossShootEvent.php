<?php

namespace OguzhanUmutlu\Bosses\events;

use OguzhanUmutlu\Bosses\entities\BossEntity;
use pocketmine\entity\projectile\Projectile;
use pocketmine\event\Cancellable;
use pocketmine\event\Event;

class BossShootEvent extends Event implements Cancellable {
    private $boss;
    private $projectile;
    public function __construct(BossEntity $boss, Projectile $projectile) {
        $this->boss = $boss;
        $this->projectile = $projectile;
    }

    /*** @return BossEntity */
    public function getBoss(): BossEntity {
        return $this->boss;
    }

    /*** @return Projectile */
    public function getProjectile(): Projectile {
        return $this->projectile;
    }

    /*** @param Projectile $projectile */
    public function setProjectile(Projectile $projectile): void {
        $this->projectile = $projectile;
    }
}