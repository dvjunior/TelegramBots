<?php

// Load composer
require '../vendor/autoload.php';
require '../config/config.php';

$API_KEY = TELEGRAM_API_KEY;
$BOT_NAME = TELEGRAM_BOT_NAME;

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);
    // Delete webhook
    $result = $telegram->deleteWebhook();
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
