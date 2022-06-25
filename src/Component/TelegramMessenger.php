<?php

namespace App\Component;

class TelegramMessenger implements Messenger
{
    public function sendMessage($text): void
    {
        $message = [
            'mode' => 'text',
            'text' => "Message for Telegram: {$text}"
        ];
        echo $message['text'];
    }
}