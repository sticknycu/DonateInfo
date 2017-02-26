<?php

namespace DonateInfo;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;

class DonateInfo extends PluginBase {

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
		case "membru":
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE. "         Permisii Jucator:       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- /list, /home, /homes, /sethome, /delhome, /sell hand,all       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- /tpa , /tpaccept, /tpdeny, /warps, /report, /bail, /votejail".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "INFO: Este rankul primit prima data pe server. Fiecare jucator il are.".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			return true;
		case "membru+":
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "         Permisii Membru+:       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- In plus fata de Membru ( Afla cu /membru ):       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- /suicide, /back, /getpos".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "INFO: Rankul costa 5euro. Afla in HUB cum poti dona. (/donate, /donatehelp)".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			return true;
		case "vip":
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "         Permisii VIP:       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- In plus fata de Membru+ ( Afla cu /membru+ ):       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- /fly".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "INFO: Rankul costa 7euro. Afla in HUB cum poti dona. (/donate, /donatehelp)".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			return true;
		case "moderator":
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "         Permisii Moderator:       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- In plus fata de VIP ( Afla cu /vip ):       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- /heal, /kick, /time, /tempban".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "INFO: Rankul costa 10euro. Afla in HUB cum poti dona. (/donate, /donatehelp)".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			return true;
		case "moderator+":
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "         Permisii Moderator+:       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD .  "- In plus fata de Moderator ( Afla cu /moderator ):       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- /god, /ban , /ban-ip, /pardon, /pardon-ip, /banlist, /mute, /me".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE. "INFO: Rankul costa 15euro. Afla in HUB cum poti dona. (/donate, /donatehelp)".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			return true;
		case "manager":
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "         Permisii Manager:       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- In plus fata de Moderator+ ( Afla cu /moderator+ ):       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- /repair, /jump, /top, /weather, /say".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "INFO: Rankul costa 20euro. Afla in HUB cum poti dona. (/donate, /donatehelp)".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			return true;
		case "yt":
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "         Permisii YT:       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- Aceleasi permisii ca la VIP: /vip.".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "INFO: Pentru rank faci cerere pe Grupul de pe Facebook. (/info)".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			return true;
		case "helperjr":
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "         Permisii HelperJr:       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- Cele de la VIP: /vip, la care se adauga urmatoarele:".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- /tempban, /mute, /jail, /kick, /tp, /me, /weather, /time".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "INFO: Pentru rank faci cerere pe Grupul de pe Facebook. (/info)".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			return true;
		case "helper":
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "         Permisii Helper:       ".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- Cele de la Helper: /vip, la care se adauga urmatoarele:".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::BOLD . "- /ban , /ban-ip, /pardon, /pardon-ip, /banlist, /say".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::WHITE . "INFO: Pentru rank faci cerere pe Grupul de Facebook. (/info)".TextFormat::RESET);
			$sender->sendMessage(TextFormat::RESET.TextFormat::YELLOW . "-----------------------------------------".TextFormat::RESET);
			return true;
		default:
			return false;
	}
    }
}
