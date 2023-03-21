<?php
namespace GDO\DogIRCAutologin\Method;

use GDO\Dog\DOG_Command;
use GDO\Dog\DOG_Server;
use GDO\Dog\DOG_User;

final class Autologin extends DOG_Command
{

	public function irc_PRIVMSG(DOG_Server $server, DOG_User $user, $to, $text) {}

}
