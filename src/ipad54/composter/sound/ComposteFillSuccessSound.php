<?php


namespace ipad54\composter\sound;


use pocketmine\math\Vector3;
use pocketmine\network\mcpe\protocol\LevelSoundEventPacket;
use pocketmine\world\sound\Sound;

class ComposteFillSuccessSound implements Sound
{

    public function encode(?Vector3 $pos): array
    {
        return [LevelSoundEventPacket::create(LevelSoundEventPacket::SOUND_BLOCK_COMPOSTER_FILL_SUCCESS, $pos)];
    }
}