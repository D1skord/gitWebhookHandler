<?php

namespace App\Controller;

use App\Component\SlackMessageSender;
use App\Component\TelegramMessageSender;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/messenger", name="app_messenger")
     */
    public function messenger(
        TelegramMessageSender $telegramMessageSender,
        SlackMessageSender $slackMessageSender
    ): Response {
        $telegramMessageSender->send('text');
        $slackMessageSender->send('text');

        return new Response('');
    }
}