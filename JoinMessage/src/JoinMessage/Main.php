<?php

namespace JoinMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getserver()->getLogger()->info("JoinMessage enabled!")
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onDisable(){
		$this->getserver()->getLogger()->info("JoinMessage disabled!")
	}
	
	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPLayer();
		$player->sendMessage("Hello PLayer! Welcome To The Server";
		{