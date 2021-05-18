<?php

declare(strict_types = 1);

namespace rark\player_over_ride;

use pocketmine\plugin\PluginBase;


final class Main extends PluginBase{

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents(new EventListener, $this);
	}
}