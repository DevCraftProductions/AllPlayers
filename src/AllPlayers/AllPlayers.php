<?php

namespace AllPlayers;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;

class AllPlayers extends PluginBase implements Listener {
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("AllPlayers By ItMeDevCraft_ Loaded!");
  }
  
  public function onPlayerChat(PlayerChatEvent $event) {
    
    $player = $allplayers->getPlayer();
    $allplayers = str_replace("%p", $player->getName());
    $allplayers = str_replace("@a", $player->getName());
  }
}

?>
