<?php

namespace App\Trait;

use Psr\Log\LoggerInterface;
trait LoggerTrait
{
    /**
     * @var LoggerInterface|null
     */
    private $logger;
    /**
     * @required
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    private function logInfo(string $message, array $context = [])
    {
        $this->logger?->info($message, $context);
    }
}
