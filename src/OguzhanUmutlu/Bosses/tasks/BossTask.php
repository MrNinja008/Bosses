<?php

namespace OguzhanUmutlu\Bosses\tasks;

use Exception;
use OguzhanUmutlu\Bosses\Bosses;
use OguzhanUmutlu\Bosses\entities\BossAttributes;
use OguzhanUmutlu\Bosses\entities\BossEntity;
use pocketmine\entity\Entity;
use pocketmine\level\Position;
use pocketmine\scheduler\Task;

class BossTask extends Task {
    public $attributes;
    public $info = [];
    public function __construct(BossAttributes $attributes, float $scale, float $health, float $maxHealth, string $name, Position $position, int $ticks) {
        $this->attributes = $attributes;
        $this->info = [
            "scale" => $scale,
            "health" => $health,
            "maxHealth" => $maxHealth,
            "name" => $name,
            "position" => $position,
            "ticks" => $ticks
        ];
        Bosses::$instance->getScheduler()->scheduleDelayedTask($this, $ticks);
    }

    /**
     * @throws Exception
     */
    public function onRun(int $currentTick) {
        $attributes = $this->attributes;
        $entity = Entity::createEntity($this->info["name"], $this->info["position"]->level, Entity::createBaseNBT($this->info["position"]));
        if(!$entity instanceof BossEntity) throw new Exception(BossEntity::class." excepted ".get_class($entity) ." provided.");
        $entity->attributes = $attributes;
        $entity->setScale($this->info["scale"]);
        $entity->setMaxHealth($this->info["maxHealth"]);
        $entity->setHealth($this->info["health"]);
        $entity->onDie[] = function() {
            Bosses::$instance->getScheduler()->scheduleDelayedTask($this, $this->info["ticks"]);
        };
        $entity->spawnToAll();
    }
}