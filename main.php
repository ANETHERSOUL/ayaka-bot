<?php

# - Include Archives
    include __DIR__ . "/Config/Config.php";
    include __DIR__ . "/Config/Variables.php";
    include __DIR__ . "/Functions/Bot.php";

# - Include Message and Buttons
    include __DIR__ . "/Modules/messages.php";
    include __DIR__ . "/Modules/buttons.php";

# - Settings Time Zone
    date_default_timezone_set($config['timeZone']);

# - Include Commands
    include __DIR__ . "/Modules/welcome.php";

# - Start Bot
if (isset($message) && !is_null($message))
{
    if (str_starts_with($message, "/start")) {
        Articmi('sendPhoto', [
            'chat_id' => $chat_id,
            'photo' => "https://imgur.com/a/EYdoia8",
            'caption' => $startmessage,
            'parse_mode' => 'HTML',
            'reply_markup' => json_encode([
                'inline_keyboard' => $buttons
            ])
        ]);
    }
}

//  Structure clean
// if (isset($message) && !is_null($message))
// {
//     if (str_starts_with($message, ""))
//     {
        
//     }
// }