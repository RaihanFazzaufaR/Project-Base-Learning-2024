<?php

namespace App\Services;

use GuzzleHttp\Client;

class TelegramService
{
    protected $client;
    protected $chatId;
    protected $botToken;

    public function __construct()
    {
        $this->client = new Client();
        $this->chatId = env('TELEGRAM_CHAT_ID');
        $this->botToken = env('TELEGRAM_BOT_TOKEN');
    }


    public function sendMessage($message) {
        $url = "https://api.telegram.org/bot" . $this->botToken . "/sendMessage";

        $response = $this->client->post($url, [
            'json' => [
                'chat_id' => $this->chatId,
                'text' => $message,
                'parse_mode' => 'HTML',
            ],
            'verify' => false,
        ]);

        return $response->getBody();
    }
}