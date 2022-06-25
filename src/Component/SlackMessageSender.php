<?php

namespace App\Component;

class SlackMessageSender extends MessageSender
{
    public function getMessenger(): Messenger
    {
        return new SlackMessenger();
    }
}