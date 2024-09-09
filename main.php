<?php

# - Include Archives
    include __DIR__."/Config/Config.php";
    include __DIR__."/Config/Variables.php";
    include __DIR__."/Functions/Bot.php";

# - Settings Time Zone
    date_default_timezone_set($config['timeZone']);

# - Start Bot
    if (strpos($message, "/start") === 0 || strpos($message, "!start") === 0 || strpos($message, ".start") === 0)
    {
        Articmi('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "<b>Hola @$username</b>, bienvenido a $groupname"
        ]);
    }