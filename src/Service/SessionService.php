<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SessionService
{
    private SessionInterface $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    // Set data in session
    public function set(string $key, $value): void
    {
        $this->session->set($key, $value);
    }

    // Get data from session
    public function get(string $key, $default = null)
    {
        return $this->session->get($key, $default);
    }

    // Remove data from session
    public function remove(string $key): void
    {
        $this->session->remove($key);
    }

    // Clear all session data
    public function clear(): void
    {
        $this->session->clear();
    }
}