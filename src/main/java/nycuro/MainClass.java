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
        this.getServer().getPluginManager().registerEvents(new EventListener(this), this);
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
			sender.sendMessage(TextFormat.BLUE + "- /kit starter, /list, /suicide, /home, /homes, /sethome, /delhome       ");
			sender.sendMessage(TextFormat.BLUE + "- /tpa , /tpaccept, /tpdeny, /warps");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "vip":
			sender.sendMessage(TextFormat.RED +"-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii VIP:       ");
			sender.sendMessage(TextFormat.BLUE + "- In plus fata de jucator ( Afla cu /jucator ):       ");
			sender.sendMessage(TextFormat.BLUE + "- /fly , /getpos");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "vip+":
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii VIP+:       ");
			sender.sendMessage(TextFormat.BLUE + "- In plus fata de VIP ( Afla cu /vip ):       ");
			sender.sendMessage(TextFormat.BLUE + "- /kick , /time, /heal");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "mod":
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii Mod:       ");
			sender.sendMessage(TextFormat.BLUE + "- In plus fata de VIP+ ( Afla cu /vip+ ):       ");
			sender.sendMessage(TextFormat.BLUE + "- /say , /god, /mute, /unmute");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "admin":
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii Admin:       ");
			sender.sendMessage(TextFormat.BLUE +  "- In plus fata de Mod ( Afla cu /mod ):       ");
			sender.sendMessage(TextFormat.BLUE + "- /ban , /ban-ip, /gamemode, /pardon, /pardon-ip");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "commander":
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii Commander:       ");
			sender.sendMessage(TextFormat.BLUE + "- In plus fata de Admin ( Afla cu /admin ):       ");
			sender.sendMessage(TextFormat.BLUE + "- /effect , /give, /tp, /jump, /repair");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "neon":
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii Neon:       ");
			sender.sendMessage(TextFormat.BLUE + "- Aproape toate. ):       ");
			sender.sendMessage(TextFormat.BLUE + "- NU ARE OP. OP nu se vinde.");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "yt":
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii YT:       ");
			sender.sendMessage(TextFormat.BLUE + "- Ca la VIP+ ( Afla la /vip+ ):       ");
			sender.sendMessage(TextFormat.BLUE + "- Are in plus /kit youtuber.");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		case "ajutor":
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			sender.sendMessage(TextFormat.GOLD + "         Permisii Ajutor:       ");
			sender.sendMessage(TextFormat.BLUE + "- Ca la VIP+ ( Afla la /vip+ ):       ");
			sender.sendMessage(TextFormat.BLUE + "- /kick, /time, /say, /broadcast, /ban, /ban-ip");
			sender.sendMessage(TextFormat.BLUE + "- /pardon, /pardon-ip, /tp, /weather");
			sender.sendMessage(TextFormat.RED + "-----------------------------------------");
			return true;
		default:
			return false;
        }
    }

}
