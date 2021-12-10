<?php

declare(strict_types=1);

namespace ipad54\composter;


use ipad54\composter\block\Composter;
use pocketmine\block\BlockFactory;
use pocketmine\block\BlockIdentifier as BID;
use pocketmine\block\BlockLegacyIds as IDS;
use pocketmine\item\ItemIds;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{

    protected function onLoad() : void
    {
        BlockFactory::getInstance()->register(new Composter(new BID(IDS::COMPOSTER, 0, ItemIds::COMPOSTER)));
    }
}
