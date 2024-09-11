<?php

# - Welcome group
if (isset($update['message']))
{
    if (isset($update['message']['new_chat_members'])) {
        foreach ($update['message']['new_chat_members'] as $new_member) {
            Articmi('sendMessage', [
                'chat_id' => $chat_id,
                'text' => $welcomemessage,
                'parse_mode' => 'HTML' // Puedes usar Markdown o HTML según prefieras
            ]);
        }
    }
}