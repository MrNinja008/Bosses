<?php

namespace OguzhanUmutlu\Bosses;

use dktapps\pmforms\MenuForm;
use dktapps\pmforms\MenuOption;
use OguzhanUmutlu\Bosses\entities\BossAttributes;
use OguzhanUmutlu\Bosses\entities\BossEntity;
use OguzhanUmutlu\Bosses\entities\types\AgentBoss;
use OguzhanUmutlu\Bosses\entities\types\BatBoss;
use OguzhanUmutlu\Bosses\entities\types\BlazeBoss;
use OguzhanUmutlu\Bosses\entities\types\CaveSpiderBoss;
use OguzhanUmutlu\Bosses\entities\types\ChickenBoss;
use OguzhanUmutlu\Bosses\entities\types\CowBoss;
use OguzhanUmutlu\Bosses\entities\types\CreeperBoss;
use OguzhanUmutlu\Bosses\entities\types\DolphinBoss;
use OguzhanUmutlu\Bosses\entities\types\DonkeyBoss;
use OguzhanUmutlu\Bosses\entities\types\ElderGuardianBoss;
use OguzhanUmutlu\Bosses\entities\types\EnderDragonBoss;
use OguzhanUmutlu\Bosses\entities\types\EndermanBoss;
use OguzhanUmutlu\Bosses\entities\types\EndermiteBoss;
use OguzhanUmutlu\Bosses\entities\types\GhastBoss;
use OguzhanUmutlu\Bosses\entities\types\GuardianBoss;
use OguzhanUmutlu\Bosses\entities\types\HorseBoss;
use OguzhanUmutlu\Bosses\entities\types\HuskBoss;
use OguzhanUmutlu\Bosses\entities\types\IronGolemBoss;
use OguzhanUmutlu\Bosses\entities\types\LlamaBoss;
use OguzhanUmutlu\Bosses\entities\types\MagmaCube;
use OguzhanUmutlu\Bosses\entities\types\MooshroomBoss;
use OguzhanUmutlu\Bosses\entities\types\MuleBoss;
use OguzhanUmutlu\Bosses\entities\types\NPCBoss;
use OguzhanUmutlu\Bosses\entities\types\OcelotBoss;
use OguzhanUmutlu\Bosses\entities\types\ParrotBoss;
use OguzhanUmutlu\Bosses\entities\types\PhantomBoss;
use OguzhanUmutlu\Bosses\entities\types\PigBoss;
use OguzhanUmutlu\Bosses\entities\types\PolarBearBoss;
use OguzhanUmutlu\Bosses\entities\types\RabbitBoss;
use OguzhanUmutlu\Bosses\entities\types\SheepBoss;
use OguzhanUmutlu\Bosses\entities\types\ShulkerBoss;
use OguzhanUmutlu\Bosses\entities\types\SilverfishBoss;
use OguzhanUmutlu\Bosses\entities\types\SkeletonBoss;
use OguzhanUmutlu\Bosses\entities\types\SkeletonHorseBoss;
use OguzhanUmutlu\Bosses\entities\types\SlimeBoss;
use OguzhanUmutlu\Bosses\entities\types\SnowGolemBoss;
use OguzhanUmutlu\Bosses\entities\types\SpiderBoss;
use OguzhanUmutlu\Bosses\entities\types\SquidBoss;
use OguzhanUmutlu\Bosses\entities\types\StrayBoss;
use OguzhanUmutlu\Bosses\entities\types\VillagerBoss;
use OguzhanUmutlu\Bosses\entities\types\VindicatorBoss;
use OguzhanUmutlu\Bosses\entities\types\WitchBoss;
use OguzhanUmutlu\Bosses\entities\types\WitherBoss;
use OguzhanUmutlu\Bosses\entities\types\WitherSkeletonBoss;
use OguzhanUmutlu\Bosses\entities\types\WolfBoss;
use OguzhanUmutlu\Bosses\entities\types\ZombieBoss;
use OguzhanUmutlu\Bosses\entities\types\ZombieHorseBoss;
use OguzhanUmutlu\Bosses\entities\types\ZombiePigmanBoss;
use OguzhanUmutlu\Bosses\entities\types\ZombieVillager;
use OguzhanUmutlu\Bosses\tasks\BossTask;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\entity\Entity;
use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Bosses extends PluginBase {
    /*** @var Config */
    public static $config;
    /*** @var Bosses */
    public static $instance;
    public function onEnable() {
        self::$config = $this->getConfig();
        self::$instance = $this;
        foreach([
                    new AgentBoss(null, Entity::createBaseNBT(new Vector3())),
                    new BatBoss(null, Entity::createBaseNBT(new Vector3())),
                    new BlazeBoss(null, Entity::createBaseNBT(new Vector3())),
                    new CaveSpiderBoss(null, Entity::createBaseNBT(new Vector3())),
                    new ChickenBoss(null, Entity::createBaseNBT(new Vector3())),
                    new CowBoss(null, Entity::createBaseNBT(new Vector3())),
                    new CreeperBoss(null, Entity::createBaseNBT(new Vector3())),
                    new DolphinBoss(null, Entity::createBaseNBT(new Vector3())),
                    new DonkeyBoss(null, Entity::createBaseNBT(new Vector3())),
                    new ElderGuardianBoss(null, Entity::createBaseNBT(new Vector3())),
                    new EnderDragonBoss(null, Entity::createBaseNBT(new Vector3())),
                    new EndermanBoss(null, Entity::createBaseNBT(new Vector3())),
                    new EndermiteBoss(null, Entity::createBaseNBT(new Vector3())),
                    new GhastBoss(null, Entity::createBaseNBT(new Vector3())),
                    new GuardianBoss(null, Entity::createBaseNBT(new Vector3())),
                    new HorseBoss(null, Entity::createBaseNBT(new Vector3())),
                    new HuskBoss(null, Entity::createBaseNBT(new Vector3())),
                    new IronGolemBoss(null, Entity::createBaseNBT(new Vector3())),
                    new LlamaBoss(null, Entity::createBaseNBT(new Vector3())),
                    new MagmaCube(null, Entity::createBaseNBT(new Vector3())),
                    new MooshroomBoss(null, Entity::createBaseNBT(new Vector3())),
                    new MuleBoss(null, Entity::createBaseNBT(new Vector3())),
                    new NPCBoss(null, Entity::createBaseNBT(new Vector3())),
                    new OcelotBoss(null, Entity::createBaseNBT(new Vector3())),
                    new ParrotBoss(null, Entity::createBaseNBT(new Vector3())),
                    new PhantomBoss(null, Entity::createBaseNBT(new Vector3())),
                    new PigBoss(null, Entity::createBaseNBT(new Vector3())),
                    new PolarBearBoss(null, Entity::createBaseNBT(new Vector3())),
                    new RabbitBoss(null, Entity::createBaseNBT(new Vector3())),
                    new SheepBoss(null, Entity::createBaseNBT(new Vector3())),
                    new ShulkerBoss(null, Entity::createBaseNBT(new Vector3())),
                    new SilverfishBoss(null, Entity::createBaseNBT(new Vector3())),
                    new SkeletonBoss(null, Entity::createBaseNBT(new Vector3())),
                    new SkeletonHorseBoss(null, Entity::createBaseNBT(new Vector3())),
                    new SlimeBoss(null, Entity::createBaseNBT(new Vector3())),
                    new SnowGolemBoss(null, Entity::createBaseNBT(new Vector3())),
                    new SpiderBoss(null, Entity::createBaseNBT(new Vector3())),
                    new SquidBoss(null, Entity::createBaseNBT(new Vector3())),
                    new StrayBoss(null, Entity::createBaseNBT(new Vector3())),
                    new VillagerBoss(null, Entity::createBaseNBT(new Vector3())),
                    new VindicatorBoss(null, Entity::createBaseNBT(new Vector3())),
                    new WitchBoss(null, Entity::createBaseNBT(new Vector3())),
                    new WitherBoss(null, Entity::createBaseNBT(new Vector3())),
                    new WitherSkeletonBoss(null, Entity::createBaseNBT(new Vector3())),
                    new WolfBoss(null, Entity::createBaseNBT(new Vector3())),
                    new ZombieBoss(null, Entity::createBaseNBT(new Vector3())),
                    new ZombieHorseBoss(null, Entity::createBaseNBT(new Vector3())),
                    new ZombiePigmanBoss(null, Entity::createBaseNBT(new Vector3())),
                    new ZombieVillager(null, Entity::createBaseNBT(new Vector3()))
                ] as $entity)
            if($entity instanceof BossEntity)
                Entity::registerEntity(get_class($entity), true, [$entity->getName()]);
            foreach(self::$config->getNested("bosses", []) as $boss) {
                $boss["isMinion"] = false;
                $attributes = BossAttributes::fromArray($boss);
                if(!$this->getServer()->isLevelLoaded($boss["position"]["level"]))
                    $this->getServer()->loadLevel($boss["position"]["level"]);
                if($this->getServer()->getLevelByName($boss["position"]["level"]) instanceof Level)
                    new BossTask($attributes, $boss["scale"], $boss["health"], $boss["maxHealth"], $boss["name"], new Position($boss["position"]["x"], $boss["position"]["y"], $boss["position"]["z"], $this->getServer()->getLevelByName($boss["position"]["level"])), $boss["ticks"]);
            }
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if($command->getName() != "boss" || !$sender->hasPermission($command->getPermission())) return true;
        if(!$sender instanceof Player) {
            $sender->sendMessage("§c> Use this command in-game.");
            return true;
        }
        $sender->sendForm(new MenuForm(
            "Boss Menu",
            "Select an action:",
            [
                new MenuOption("Create new auto-boss"),
                new MenuOption("Create boss")
            ],
            function(Player $player, int $res): void {
                switch($res) {
                    case 0:
                        // TODO: copy of case 1 but with ticks
                        break;
                    case 1:
                        // TODO: all settings in custom form
                        break;
                }
            }
        ));
        return true;
    }
}