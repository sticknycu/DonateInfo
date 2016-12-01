<?php

namespace DonateInfo\DonateInfo;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;

class MainClass extends PluginBase {

    public function onLoad() {
        $this->getLogger()->info(TextFormat::WHITE . "DonateInfo loaded!");
    }

    public function onEnable() {
        $this->getLogger()->info(TextFormat::DARK_GREEN . "DonateInfo enabled!");
    }

    public function onDisable() {
        $this->getLogger()->info(TextFormat::DARK_RED . "DonateInfo disabled!");
    }

    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        switch($command->getName()) {
		case "jucator":
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			$sender->sendMessage(TextFormat::GOLD . "         Permisii Jucator:       ");
			$sender->sendMessage(TextFormat::BLUE . "- /kit starter, /list, /suicide, /home, /homes, /sethome, /delhome       ");
			$sender->sendMessage(TextFormat::BLUE . "- /tpa , /tpaccept, /tpdeny, /warps");
			$sender->sendMessage(TextFormat::YELLOW . "INFO: Este rankul primit prima data pe server. Fiecare jucator il are.");
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			return true;
		case "guardian":
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			$sender->sendMessage(TextFormat::GOLD . "         Permisii Guardian:       ");
			$sender->sendMessage(TextFormat::BLUE . "- In plus fata de jucator ( Afla cu /jucator ):       ");
			$sender->sendMessage(TextFormat::BLUE . "- /kit guardian, /fly , /getpos");
			$sender->sendMessage(TextFormat::YELLOW . "INFO: Rankul costa 5euro. Afla in HUB cum poti dona. (/donate)");
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			return true;
		case "supreme":
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			$sender->sendMessage(TextFormat::GOLD . "         Permisii Supreme:       ");
			$sender->sendMessage(TextFormat::BLUE . "- In plus fata de Guardian ( Afla cu /guardian ):       ");
			$sender->sendMessage(TextFormat::BLUE . "- /kit supreme, /kick , /time, /heal");
			$sender->sendMessage(TextFormat::YELLOW . "INFO: Rankul costa 7euro. Afla in HUB cum poti dona. (/donate)");
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			return true;
		case "ultra":
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			$sender->sendMessage(TextFormat::GOLD . "         Permisii Ultra:       ");
			$sender->sendMessage(TextFormat::BLUE . "- In plus fata de Supreme ( Afla cu /supreme ):       ");
			$sender->sendMessage(TextFormat::BLUE . "- /kit ultra, /say , /god, /mute, /unmute");
			$sender->sendMessage(TextFormat::YELLOW . "INFO: Rankul costa 10euro. Afla in HUB cum poti dona. (/donate)");
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			return true;
		case "neon":
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			$sender->sendMessage(TextFormat::GOLD . "         Permisii Neon:       ");
			$sender->sendMessage(TextFormat::BLUE .  "- In plus fata de Ultra ( Afla cu /ultra ):       ");
			$sender->sendMessage(TextFormat::BLUE . "- /kit neon, /ban , /ban-ip, /gamemode, /pardon, /pardon-ip");
			$sender->sendMessage(TextFormat::YELLOW . "INFO: Rankul costa 15euro. Afla in HUB cum poti dona. (/donate)");
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			return true;
		case "legend":
			$sender->sendMeessage(TextFormat::RED . "-----------------------------------------");
			$sender->sendMessage(TextFormat::GOLD . "         Permisii Legend:       ");
			$sender->sendMessage(TextFormat::BLUE . "- In plus fata de Neon ( Afla cu /neon ):       ");
			$sender->sendMessage(TextFormat::BLUE . "- /kit legend, /effect , /give, /tpo, /tpohere, /jump, /repair");
			$sender->sendMessage(TextFormat::YELLOW . "INFO: Rankul costa 20euro. Afla in HUB cum poti dona. (/donate)");
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			return true;
		case "master":
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			$sender->sendMessage(TextFormat::GOLD . "         Permisii Commander:       ");
			$sender->sendMessage(TextFormat::BLUE . "- Aproape toate:       ");
			$sender->sendMessage(TextFormat::BLUE . "- Kit special: /kit master     ");
			$sender->sendMessage(TextFormat::BLUE . "- NU ARE OP. OP nu se vinde.");
			$sender->sendMessage(TextFormat::YELLOW . "INFO: Rankul costa 30euro. Afla in HUB cum poti dona. (/donate)");
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			return true;
		case "yt":
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			$sender->sendMessage(TextFormat::GOLD . "         Permisii YT:       ");
			$sender->sendMessage(TextFormat::BLUE . "- Ca la Supreme ( Afla la /supreme ):       ");
			$sender->sendMessage(TextFormat::BLUE . "- Kit Special: /kit youtuber.");
			$sender->sendMessage(TextFormat::YELLOW . "INFO: Pentru rank faci cerere pe forum. Forumul se afla in HUB. (/info)");
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			return true;
		case "ajutor":
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			$sender->sendMessage(TextFormat::GOLD . "         Permisii Ajutor:       ");
			$sender->sendMessage(TextFormat::BLUE . "- Ca la Supreme ( Afla la /supreme ):       ");
			$sender->sendMessage(TextFormat::BLUE . "- /kick, /time, /say, /broadcast, /ban, /ban-ip");
			$sender->sendMessage(TextFormat::BLUE . "- /pardon, /pardon-ip, /tpo, /tpohere, /weather");
			$sender->sendMessage(TextFormat::BLUE . "- Kit Special: /kit ajutor.");
			$sender->sendMessage(TextFormat::YELLOW . "INFO: Pentru rank faci cerere pe forum. Forumul se afla in HUB. (/info)");
			$sender->sendMessage(TextFormat::RED . "-----------------------------------------");
			return true;
		default:
			return false;
	}
    }
}
