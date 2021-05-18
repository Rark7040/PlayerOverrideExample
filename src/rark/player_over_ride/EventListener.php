<?php

declare(strict_types = 1);

namespace rark\player_over_ride;

use pocketmine\event\{
	Listener,
	player\PlayerCreationEvent
};


final class EventListener implements Listener{

	public function onCreatePlayer(PlayerCreationEvent $event):void{
		$event->setBaseClass(CustomPlayer::class);
		$event->setPlayerClass(CustomPlayer::class);
	}
}