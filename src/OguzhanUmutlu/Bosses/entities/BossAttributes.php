<?php

namespace OguzhanUmutlu\Bosses\entities;

use pocketmine\nbt\tag\ByteTag;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\FloatTag;
use pocketmine\nbt\tag\IntTag;

class BossAttributes {
    public $isMinion = false;
    public $speed = 1.0;
    public $hitChance = 70;
    public $fallDamage = true;
    public $canSpawnMinions = true;
    public $visionReach = 10;
    public $hitReach = 1.2;
    public $damageAmount = 2;
    public $damageFire = true;
    public $hitMotionX = 0;
    public $hitMotionY = 0;
    public $hitMotionZ = 0;
    public $canShoot = true;
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
            "damageAmount" => $this->damageAmount,
            "damageFire" => $this->damageFire,
            "hitMotionX" => $this->hitMotionX,
            "hitMotionY" => $this->hitMotionY,
            "hitMotionZ" => $this->hitMotionZ,
            "canShoot" => $this->canShoot,
            "minionSpawnTickAmount" => $this->minionSpawnTickAmount,
            "isAlwaysAggressive" => $this->isAlwaysAggressive
        ];
    }
    public function toCompoundTag(): CompoundTag {
        return new CompoundTag("BossAttributes", [
            new ByteTag("isMinion", $this->isMinion),
            new FloatTag("speed", $this->speed),
            new FloatTag("hitChance", $this->hitChance),
            new ByteTag("fallDamage", $this->fallDamage),
            new ByteTag("canSpawnMinions", $this->canSpawnMinions),
            new ByteTag("canSpawnMinions", $this->canSpawnMinions),
            new FloatTag("hitReach", $this->hitReach),
            new FloatTag("damageAmount", $this->damageAmount),
            new ByteTag("damageFire", $this->damageFire),
            new FloatTag("hitMotionX", $this->hitMotionX),
            new FloatTag("hitMotionY", $this->hitMotionY),
            new FloatTag("hitMotionZ", $this->hitMotionZ),
            new ByteTag("canShoot", $this->canShoot),
            new IntTag("minionSpawnTickAmount", $this->minionSpawnTickAmount),
            new ByteTag("isAlwaysAggressive", $this->isAlwaysAggressive)
        ]);
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
        $attributes->damageAmount = $array["damageAmount"];
        $attributes->damageFire = $array["damageFire"];
        $attributes->hitMotionX = $array["hitMotionX"];
        $attributes->hitMotionY = $array["hitMotionY"];
        $attributes->hitMotionZ = $array["hitMotionZ"];
        $attributes->canShoot = $array["canShoot"];
        $attributes->minionSpawnTickAmount = $array["minionSpawnTickAmount"];
        $attributes->isAlwaysAggressive = $array["isAlwaysAggressive"];
        return $attributes;
    }
}