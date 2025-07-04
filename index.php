<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

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
        $ch = curl_init('https://aj.dev.br/f');

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        $data = json_decode($response, true);

        return $data;
    }

    public function getAllCreatedToday()
    {
        $usuarios = $this->request();

        return array_filter($usuarios, function ($user) {
            $createdAt = Carbon::parse($user['created_at'])->toDateString();
            return $createdAt === $this->carbon->toDateString();
        });
    }

    public function getCountCreatedToday()
    {
        return count($this->getAllCreatedToday());
    }
}

$users = new Users(Carbon::now());

echo "Usuários criados hoje: " . $users->getCountCreatedToday();