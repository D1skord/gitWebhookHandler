<?php

namespace App\Component;

interface Messenger
{
    public function sendMessage($text): void;
}