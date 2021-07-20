<?php

namespace OguzhanUmutlu\Bosses\entities;

class BossAttributes {
    public $isMinion = false;
    public $speed = 1.0;
    public $hitChance = 70;
    public $fallDamage = true;
    public $canSpawnMinions = true;
    public $visionReach = 10;
    public $hitReach = 1.2;
    public $minionSpawnTickAmount = 20*60;
    public $isAlwaysAggressive = true;
    public function toArray(): array {
        return [
            "isMinion" => $this->isMinion,
            "speed" => $this->speed,
            "hitChance" => $this->hitChance,
            "fallDamage" => $this->fallDamage,
            "canSpawnMinions" => $this->canSpawnMinions,
            "visionReach" => $this->visionReach,
            "hitReach" => $this->hitReach,
            "minionSpawnTickAmount" => $this->minionSpawnTickAmount,
            "isAlwaysAggressive" => $this->isAlwaysAggressive
        ];
    }
    public static function fromArray(array $array): self {
        $attributes = new self();
        $attributes->isMinion = $array["isMinion"];
        $attributes->speed = $array["speed"];
        $attributes->hitChance = $array["hitChance"];
        $attributes->fallDamage = $array["fallDamage"];
        $attributes->canSpawnMinions = $array["canSpawnMinions"];
        $attributes->visionReach = $array["visionReach"];
        $attributes->hitReach = $array["hitReach"];
        $attributes->minionSpawnTickAmount = $array["minionSpawnTickAmount"];
        $attributes->isAlwaysAggressive = $array["isAlwaysAggressive"];
        return $attributes;
    }
}