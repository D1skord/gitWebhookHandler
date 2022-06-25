<?php

namespace App\Component;

class TelegramMessageSender extends MessageSender
{
    public function getMessenger(): Messenger
    {
        return new TelegramMessenger();
    }
}