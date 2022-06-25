<?php

namespace App\Component;

class SlackMessenger implements Messenger
{
    public function sendMessage($text): void
    {
        $message = [
            'mode' => 'string',
            'text' => "Message for Slack: {$text}"
        ];
        echo $message['text'];
    }
}