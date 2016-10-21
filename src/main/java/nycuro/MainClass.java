package nycuro;

import cn.nukkit.plugin.PluginBase;
import cn.nukkit.event.Listener;
import cn.nukkit.utils.TextFormat;
import cn.nukkit.command.Command;
import cn.nukkit.command.CommandSender;
import cn.nukkit.command.CommandExecutor;

import java.io.File;
import java.io.IOException;
import java.util.LinkedHashMap;

/**
 * author: MagicDroidX
 * NukkitExamplePlugin Project
 */
public class MainClass extends PluginBase implements Listener {

    @Override
    public void onLoad() {
        this.getLogger().info(TextFormat.WHITE + "NukkitPerms loaded!");
    }

    @Override
    public void onEnable() {
        this.getLogger().info(TextFormat.DARK_GREEN + "NukkitPerms enabled!");
        this.getServer().getPluginManager().registerEvents(new EventListener(this), this);
    }

    @Override
    public void onDisable() {
        this.getLogger().info(TextFormat.DARK_RED + "NukkitPerms disabled!");
    }

    @Override
    public boolean onCommand(CommandSender sender, Command command, String label, String[] args) {
        switch (command.getName()) {
            case "example":
            				case "donate":
			$sender->sendMessage(TextFormat::RED."-----------------------------------------");
			$sender->sendMessage(TextFormat::GOLD."         Doneaza pentru o sectiune:       ");
			$sender->sendMessage(TextFormat::BLUE."- Puteti dona prin: PaySafe, PayPal, Cod de reincarcare ORANGE       ");
			$sender->sendMessage(TextFormat::BLUE."- Intra pe:");
			$sender->sendMessage(TextFormat::BLUE."- mcpe.minecraftmarket.com");
			$sender->sendMessage(TextFormat::RED."-----------------------------------------");
			return true;
				case "donateg":
			$sender->sendMessage(TextFormat::RED."-----------------------------------------");
			$sender->sendMessage(TextFormat::GOLD."         Doneaza global:       ");
			$sender->sendMessage(TextFormat::BLUE."- Puteti dona prin: PaySafe, PayPal, Cod de reincarcare ORANGE       ");
			$sender->sendMessage(TextFormat::BLUE."- Intra pe:");
			$sender->sendMessage(TextFormat::BLUE."- mcpe.minecraftmarket.com");
			$sender->sendMessage(TextFormat::RED."-----------------------------------------");
			return true;
				case "info":
			$sender->sendMessage(TextFormat::RED."-----------------------------------------");
			$sender->sendMessage(TextFormat::GOLD."         Pentru a dona scrie:       ");
			$sender->sendMessage(TextFormat::BLUE."- /donate , /donateg");
			$sender->sendMessage(TextFormat::GOLD."      Poti intra pe sectiuni astfel:    ");
			$sender->sendMessage(TextFormat::BLUE."- Apesi pe ce ai in inventar");
			$sender->sendMessage(TextFormat::BLUE."- Apesi pe NPC de la portale");
			$sender->sendMessage(TextFormat::GOLD."         Serverul este facut de:       ");
			$sender->sendMessage(TextFormat::BLUE."- NycuR0");
			$sender->sendMessage(TextFormat::GOLD."       Serverul este online 24/24.");
			$sender->sendMessage(TextFormat::GOLD."Forumul serverului este,acolo puteti face cerere de helper si builder:");
			$sender->sendMessage(TextFormat::BLUE."- http://forum.minecraft-romania.ro/viewforum.php?f=1662");
			$sender->sendMessage(TextFormat::RED."-----------------------------------------");
			return true;
				case "rules":
			$sender->sendMessage(TextFormat::RED."-----------------------------------------");
			$sender->sendMessage(TextFormat::GOLD."         Regulile sunt pe forum:       ");
			$sender->sendMessage(TextFormat::BLUE."- http://forum.minecraft-romania.ro/viewforum.php?f=1662");
			$sender->sendMessage(TextFormat::RED."-----------------------------------------");
			return true;
				default:
					return false;
        }
        return true;
    }

}
