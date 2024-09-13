<?php

# - Welcome group
if (isset($update['message']))
{
    if (isset($update['message']['new_chat_members'])) {
        foreach ($update['message']['new_chat_members'] as $new_member) {
            Articmi('sendPhoto', [
                'chat_id' => $chat_id,
                'photo' => "https://imgur.com/a/EYdoia8",
                'caption' => $welcomemessage,
                'parse_mode' => 'HTML',
            ]);
        }
    }
}