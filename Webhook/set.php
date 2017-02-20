<?php

#echo __DIR__ . '/config/config.php'. PHP_EOL;exit;

// Load composer and configuration
require  '../vendor/autoload.php';
require  '../config/config.php';


$API_KEY = TELEGRAM_API_KEY;
$BOT_NAME = TELEGRAM_BOT_NAME;
$hook_url = TELEGRAM_HOOK_URL;

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription().PHP_EOL;
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
