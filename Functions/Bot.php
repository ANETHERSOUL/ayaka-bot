<?php

function Articmi($method, $data = [])
{
    global $config;
    $tgurl = "https://api.telegram.org/bot" . $config['botToken'] . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $tgurl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);

    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($response);
    }
}

function send_message($chat_id, $text, $keyboard)
{
    Articmi('sendMessage', [
        'chat_id' => $chat_id,
        'text' => $text,
        'reply_markup' => $keyboard
    ]);
}