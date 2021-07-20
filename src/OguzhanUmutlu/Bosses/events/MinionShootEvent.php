<?php

namespace OguzhanUmutlu\Bosses\events;

use OguzhanUmutlu\Bosses\entities\BossEntity;
use pocketmine\entity\projectile\Projectile;
use pocketmine\event\Cancellable;
use pocketmine\event\Event;

class MinionShootEvent extends Event implements Cancellable {
    private $minion;
    private $projectile;
    public function __construct(BossEntity $minion, Projectile $projectile) {
        $this->minion = $minion;
        $this->projectile = $projectile;
    }

    /*** @return BossEntity */
    public function getMinion(): BossEntity {
        return $this->minion;
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