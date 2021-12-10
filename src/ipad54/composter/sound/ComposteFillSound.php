<?php


namespace ipad54\composter\sound;


use pocketmine\math\Vector3;
use pocketmine\network\mcpe\protocol\LevelSoundEventPacket;
use pocketmine\network\mcpe\protocol\types\LevelSoundEvent;
use pocketmine\world\sound\Sound;

class ComposteFillSound implements Sound
{

    public function encode(?Vector3 $pos): array
    {
        return [LevelSoundEventPacket::nonActorSound(LevelSoundEvent::BLOCK_COMPOSTER_FILL, $pos, false)];
    }
}