package nycuro;

import cn.nukkit.plugin.PluginBase;
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
public class MainClass extends PluginBase {

    @Override
    public void onLoad() {
        this.getLogger().info(TextFormat.WHITE + "DonateInfo loaded!");
    }

    @Override
    public void onEnable() {
        this.getLogger().info(TextFormat.DARK_GREEN + "DonateInfo enabled!");
    }

    @Override
    public void onDisable() {
        this.getLogger().info(TextFormat.DARK_RED + "DonateInfo disabled!");
    }

    @Override
    public boolean onCommand(CommandSender sender, Command command, String label, String[] args) {
        switch (command.getName()) {
		case "jucator":
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii Jucator:       ");
			sender.sendMessage(TextFormat.BLUE + "- /plot {claim,home,auto,visit,chat,add,save,load,use,clear,delete,deny,remove,kick,move}       ");
			sender.sendMessage(TextFormat.BLUE + "- /plot {owner,desc,biome,alias}");
			sender.sendMessage(TextFormat.BLUE + "- /tpaccept, /tpdeny, /tpa, /spawn, /sethome, /home {nume}, /delhome");
			sender.sendMessage(TextFormat.BLUE + "- Maxim 2 ploturi.");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "vip":
			sender.sendMessage(TextFormat.RED +"-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii VIP:       ");
			sender.sendMessage(TextFormat.BLUE + "- In plus fata de jucator ( Afla cu /jucator ):       ");
			sender.sendMessage(TextFormat.BLUE + "- Maxim 4 ploturi.");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "vip+":
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii VIP+:       ");
			sender.sendMessage(TextFormat.BLUE + "- In plus fata de Jucator ( Afla cu /jucator ):       ");
			sender.sendMessage(TextFormat.BLUE + "- Maxim 8 ploturi.");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "mod":
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii Mod:       ");
			sender.sendMessage(TextFormat.BLUE + "- In plus fata de Jucator ( Afla cu /jucator ):       ");
			sender.sendMessage(TextFormat.BLUE + "- Maxim 10 ploturi.");
			sender.sendMessage(TextFormat.BLUE + "- /kick, /time, /say, /mute, /unmute");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "admin":
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii Admin:       ");
			sender.sendMessage(TextFormat.BLUE +  "- In plus fata de Jucator ( Afla cu /jucator ):       ");
			sender.sendMessage(TextFormat.BLUE + "- Maxim 50 ploturi.");
			sender.sendMessage(TextFormat.BLUE + "- /kick, /time, /say, /mute, /unmute, /ban, /ban-ip, /pardon, /pardon-ip");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "yt":
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii YT:       ");
			sender.sendMessage(TextFormat.BLUE + "- Ca la Jucator ( Afla la /jucator ):       ");
			sender.sendMessage(TextFormat.BLUE + "- Maxim 8 ploturi.");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "ajutor":
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii Ajutor:       ");
			sender.sendMessage(TextFormat.BLUE + "- Ca la Jucator ( Afla la /jucator ):       ");
			sender.sendMessage(TextFormat.BLUE + "- /kick, /time, /say, /broadcast, /ban, /ban-ip");
			sender.sendMessage(TextFormat.BLUE + "- /pardon, /pardon-ip, /tpo, /tpohere, /weather");
			sender.sendMessage(TextFormat.BLUE + "- Maxim 5 ploturi.");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		default:
			return false;
	}
    }
}
