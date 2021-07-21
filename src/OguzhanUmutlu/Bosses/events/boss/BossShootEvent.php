<?php

namespace OguzhanUmutlu\Bosses\events\boss;

use OguzhanUmutlu\Bosses\entities\BossEntity;
use OguzhanUmutlu\Bosses\events\BossEvent;
use pocketmine\entity\projectile\Projectile;
use pocketmine\event\Cancellable;

class BossShootEvent extends BossEvent implements Cancellable {
    private $projectile;
    public function __construct(BossEntity $boss, Projectile $projectile) {
        $this->projectile = $projectile;
        parent::__construct($boss);
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