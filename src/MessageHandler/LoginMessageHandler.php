<?php

namespace App\MessageHandler;

use App\Message\LoginMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class LoginMessageHandler
{
    public function __invoke(LoginMessage $loginMessage): void
    {
        dump($loginMessage);
    }
}
