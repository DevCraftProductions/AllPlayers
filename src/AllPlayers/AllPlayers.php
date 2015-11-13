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
    
    $player = $event->getPlayer();
    $event = str_replace("%p", $player->getName());
    $event = str_replace("@a", $player->getName());
  }
}

?>
