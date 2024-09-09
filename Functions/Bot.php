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
        'chat_id'  =>  $chat_id,
        'text'  =>  $text,
        'reply_markup'  =>  $keyboard
    ]);
}

function edit_message($chat_id, $message_id, $text, $reply_markup){
	Articmi('editMessageText',[
	    'chat_id' => $chat_id,
	    'message_id' => $message_id,
	    'text' => $text,
	    'reply_markup' => $reply_markup
    ]);
}

function forward_message($chatid, $from_chat_id, $message_id){
	Articmi('forwardMessage',[
        'chat_id' => $chatid,
        'from_chat_id' => $from_chat_id,
        'message_id' => $message_id
    ]);
}

function copy_message($chatid, $from_chat_id, $message_id){
    Articmi('copyMessage',[
        'chat_id' => $chatid,
        'from_chat_id' => $from_chat_id,
        'message_id' => $message_id
    ]);
}

function send_photo($chat_id, $photo, $keyboard){
	Articmi('sendPhoto',[
        'chat_id' => $chat_id,
        'photo' => $photo,
        'reply_markup' => $keyboard
    ]);
}