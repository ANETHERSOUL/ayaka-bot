<?php

$update = json_decode(file_get_contents("php://input"), true);

// Variables de mensaje
    $message = $update['message']['text'] ?? null;
    $chat_id = $update['message']['chat']['id'] ?? null;
    $username = $update['message']['from']['username'] ?? null;
    $firstname = $update['message']['from']['first_name'] ?? null;
    $lastname = $update['message']['from']['last_name'] ?? null;
    $message_id = $update['message']['message_id'] ?? null;
    $chattype = $update['message']['chat']['type'] ?? null;
    $replytomessageis = $update['message']['reply_to_message']['text'] ?? null;
    $groupname = $update['message']['from']['title'] ?? null;

// Variables de callback_query
    $data = $update['callback_query']['data'] ?? null;
    $callbackfname = $update['callback_query']['from']['first_name'] ?? null;
    $callbacklname = $update['callback_query']['from']['last_name'] ?? null;
    $callbackusername = $update['callback_query']['from']['username'] ?? null;
    $callbackchatid = $update['callback_query']['message']['chat']['id'] ?? null;
    $callbackuserid = $update['callback_query']['message']['reply_to_message']['from']['id'] ?? null;
    $callbackmessageid = $update['callback_query']['message']['message_id'] ?? null;