<?php

# - Select Build
    if (isset($message) && !is_null($message)) {
        $command = explode(' ', $message)[0];

        if (str_ends_with($command, '_build')) {
            switch ($command) {
                case '/ayaka_build':
                    $response = Articmi('sendPhoto', [
                        'chat_id' => $chat_id,
                        'photo' => "https://imgur.com/a/ccW4cPW",
                        'caption' => $ayaka_build,
                        'parse_mode' => 'HTML',
                        'reply_to_message_id'=> $message_id,
                        'reply_markup' => json_encode([
                            'inline_keyboard' => $ayaka_but
                        ])
                    ]);

                    break;
            }
        } 
    }
    