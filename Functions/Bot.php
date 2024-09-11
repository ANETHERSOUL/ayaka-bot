<?php

function Articmi($method, $datas = [])
{
    global $config;
    $url = "https://api.telegram.org/bot" . $config['botToken'] . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    
    // Disable SSL verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    $response = curl_exec($ch);

    error_log("HTTP code: " . $http_code . "\n", 3, 'error_log.txt');
    error_log("Response: " . $response . "\n", 3, 'error_log.txt');

    if (curl_error($ch)) {
        file_put_contents('error_log.txt', "Curl error: " . curl_error($ch) . "\n", FILE_APPEND);
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