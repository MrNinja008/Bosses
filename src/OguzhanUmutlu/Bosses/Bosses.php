<?php

namespace OguzhanUmutlu\Bosses;

use OguzhanUmutlu\Bosses\entities\BossEntity;
use pocketmine\entity\Entity;
use pocketmine\plugin\PluginBase;

class Bosses extends PluginBase {
    public function onEnable() {
        foreach([
                    // entity goes here brr
                ] as $entity)
            if($entity instanceof BossEntity)
                Entity::registerEntity(get_class($entity), true, [$entity->getName()]);
    }
}