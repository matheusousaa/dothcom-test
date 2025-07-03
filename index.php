<?php

class Users
{
    private Carbon $carbon;

    public function __construct(Carbon $carbon)
    {
        $this->carbon = $carbon;
    }

    /** @throws Exception */
    private function request()
    {
        // Using curl...

        $ch = curl_init('https://aj.dev.br/f');

        // ...
    }

    public function getAllCreatedToday()
    {
        // ...
    }

    public function getCountCreatedToday()
    {
        // ...
    }
}

$users = new Users();

echo $users->getCountCreatedToday() . PHP_EOL;