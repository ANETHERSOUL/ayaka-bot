<?php

/*
|--------------------------------------------------------------------------
| Bot Token
|--------------------------------------------------------------------------
|
| Change this to your Bot API Token
| It can be obtained from https://telegram.dog/BotFather
|
*/
$config['botToken'] = "";

/*
|--------------------------------------------------------------------------
| Admin Creator ID
|--------------------------------------------------------------------------
|
| Change this to Admin's Numeric User ID
| ID can be obtained from https://telegram.dog/username_to_id_bot
|
*/
$config['adminID'] = "";

/*
|--------------------------------------------------------------------------
| Logs Channel ID
|--------------------------------------------------------------------------
|
| Create a New Channel/Group for logging data
| ID can be obtained from https://telegram.dog/BotFather
|
*/

$config['logsID'] =  "";

/*
|--------------------------------------------------------------------------
| Timezone
|--------------------------------------------------------------------------
|
| Current timezone for Logging Activities with time
| It can be obtained from http://1min.in/content/international/time-zones
| By Default it's in IST
|
*/
$config['timeZone'] =  "America/Managua";

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
| Database to Store User Data
|
*/
$config['db']['hostname'] =  "";
$config['db']['username'] =  "";
$config['db']['password'] =  "";
$config['db']['database'] =  "";

/*
|--------------------------------------------------------------------------
| Anti-Spam Timer
|--------------------------------------------------------------------------
|
| Anti-Spam Timer to prevent Spammers from Spamming the chat command
| Value is in Seconds. "20" = 20seconds
|
*/
$config['anti_spam_timer'] =  "20";