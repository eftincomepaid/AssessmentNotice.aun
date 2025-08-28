<?php
function send_telegram_msg($message){
    $botToken = getenv("TELEGRAM_BOT_TOKEN");
    $chat_ids = explode(",", getenv("TELEGRAM_CHAT_IDS")); // comma separated list

    $website = "https://api.telegram.org/bot" . $botToken;
    foreach ($chat_ids as $chat_id) {
        $params = [
            'chat_id' => trim($chat_id),
            'text'    => $message,
        ];
        $ch = curl_init($website . '/sendMessage');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
    }
    return true;
}
?>