<?php

namespace OguzhanUmutlu\Bosses\events\minion;

use OguzhanUmutlu\Bosses\entities\BossEntity;
use OguzhanUmutlu\Bosses\events\MinionEvent;
use pocketmine\entity\projectile\Projectile;
use pocketmine\event\Cancellable;

class MinionShootEvent extends MinionEvent implements Cancellable {
    private $projectile;
    public function __construct(BossEntity $minion, Projectile $projectile) {
        $this->projectile = $projectile;
        parent::__construct($minion);
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