<?php

namespace App\Component;

abstract class MessageSender
{
    abstract public function getMessenger(): Messenger;

    public function send($text): void
    {
        $messenger = $this->getMessenger();
        $messenger->sendMessage($text);
    }
}