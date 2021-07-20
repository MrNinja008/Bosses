<?php

namespace OguzhanUmutlu\Bosses\entities;

use pocketmine\item\Item;
use pocketmine\nbt\tag\ByteTag;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\FloatTag;
use pocketmine\nbt\tag\IntTag;
use pocketmine\nbt\tag\ListTag;

class BossAttributes {
    public $isMinion = false;
    public $speed = 1.0;
    public $canClimb = true;
    public $canSwim = true;
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
    /*** @var Item[] */
    public $drops = [];
    public function toArray(): array {
        return [
            "isMinion" => $this->isMinion,
            "speed" => $this->speed,
            "canClimb" => $this->canClimb,
            "canSwim" => $this->canSwim,
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
            "isAlwaysAggressive" => $this->isAlwaysAggressive,
            "drops" => array_map(function($drop){return $drop->jsonSerialize();},$this->drops)
        ];
    }
    public function toCompoundTag(): CompoundTag {
        return new CompoundTag("BossAttributes", [
            new ByteTag("bossIsMinion", $this->isMinion),
            new FloatTag("bossSpeed", $this->speed),
            new ByteTag("bossCanClimb", $this->canClimb),
            new ByteTag("bossCanSwim", $this->canSwim),
            new FloatTag("bossHitChance", $this->hitChance),
            new ByteTag("bossFallDamage", $this->fallDamage),
            new ByteTag("bossCanSpawnMinions", $this->canSpawnMinions),
            new ByteTag("bossCanSpawnMinions", $this->canSpawnMinions),
            new FloatTag("bossHitReach", $this->hitReach),
            new FloatTag("bossDamageAmount", $this->damageAmount),
            new ByteTag("bossDamageFire", $this->damageFire),
            new FloatTag("bossHitMotionX", $this->hitMotionX),
            new FloatTag("bossHitMotionY", $this->hitMotionY),
            new FloatTag("bossHitMotionZ", $this->hitMotionZ),
            new ByteTag("bossCanShoot", $this->canShoot),
            new IntTag("bossMinionSpawnTickAmount", $this->minionSpawnTickAmount),
            new ByteTag("bossIsAlwaysAggressive", $this->isAlwaysAggressive),
            new CompoundTag(new ListTag("bossBossDrops", array_map(function($drop){return $drop->nbtSerialize();},$this->drops)))
        ]);
    }
    public static function fromCompoundTag(CompoundTag $tag): BossAttributes {
        $attributes = new self();
        $attributes->isMinion = $tag->getByte("bossIsMinion", false);
        $attributes->speed = $tag->getFloat("bossSpeed", 1.0);
        $attributes->canClimb = $tag->getByte("bossCanClimb", true);
        $attributes->canSwim = $tag->getByte("bossCanSwim", true);
        $attributes->hitChance = $tag->getFloat("bossHitChance", 70);
        $attributes->fallDamage = $tag->getByte("bossFallDamage", true);
        $attributes->canSpawnMinions = $tag->getByte("bossCanSpawnMinions", true);
        $attributes->visionReach = $tag->getFloat("bossVisionReach", 10);
        $attributes->hitReach = $tag->getFloat("bossHitReach", 1.2);
        $attributes->damageAmount = $tag->getFloat("bossDamageAmount", 2);
        $attributes->damageFire = $tag->getByte("bossDamageFire", true);
        $attributes->hitMotionX = $tag->getFloat("bossHitMotionX", 0);
        $attributes->hitMotionY = $tag->getFloat("bossHitMotionY", 0);
        $attributes->hitMotionZ = $tag->getFloat("bossHitMotionZ", 0);
        $attributes->canShoot = $tag->getByte("bossCanShoot", true);
        $attributes->minionSpawnTickAmount = $tag->getInt("bossMinionSpawnTickAmount", 20*60);
        $attributes->isAlwaysAggressive = $tag->getByte("bossIsAlwaysAggressive", true);
        $attributes->drops = array_filter(array_map(function($drop){if(!$drop instanceof CompoundTag) return null; return Item::nbtDeserialize($drop);},($tag->getListTag("bossDrops") ?? new ListTag())->getValue()));
        return $attributes;
    }
    public static function fromArray(array $array): self {
        $attributes = new self();
        $attributes->isMinion = $array["isMinion"];
        $attributes->speed = $array["speed"];
        $attributes->canClimb = $array["canClimb"];
        $attributes->canSwim = $array["canSwim"];
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
        $attributes->drops = array_map(function($drop){return Item::jsonDeserialize($drop);},$array["drops"]);
        return $attributes;
    }
    public function equals(BossAttributes $attributes): bool {
        return $attributes->isMinion == $this->isMinion
            && $attributes->speed == $this->speed
            && $attributes->canClimb == $this->canClimb
            && $attributes->canSwim == $this->canSwim
            && $attributes->hitChance == $this->hitChance
            && $attributes->fallDamage == $this->fallDamage
            && $attributes->canSpawnMinions == $this->canSpawnMinions
            && $attributes->visionReach == $this->visionReach
            && $attributes->hitReach == $this->hitReach
            && $attributes->damageAmount == $this->damageAmount
            && $attributes->damageFire == $this->damageFire
            && $attributes->hitMotionX == $this->hitMotionX
            && $attributes->hitMotionY == $this->hitMotionY
            && $attributes->canShoot == $this->canShoot
            && $attributes->minionSpawnTickAmount == $this->minionSpawnTickAmount
            && $attributes->isAlwaysAggressive == $this->isAlwaysAggressive
            && array_map(function($item){return $item->jsonSerialize();},$attributes->drops) === array_map(function($item){return $item->jsonSerialize();},$this->drops);
    }
}