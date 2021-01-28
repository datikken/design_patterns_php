<?php

namespace App\Adapter;

class Notification
{
    protected $username = '';
    protected $password = '';

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function send($to, $from, $body, $subject = '')
    {
        if ('' == $subject) {
            return $this->sendSMS($to, $from, $body);
        } else {
            return $this->sendEmail($to, $from, $body, $subject);
        }
    }

    protected function sendSMS($to, $from, $body)
    {
        return ['send SMS Attempt' => [$to, $from, $body]];
    }

    protected function sendEmail($to, $from, $body, $subject)
    {
        return ['send Email Attempt' => [$to, $from, $body, $subject]];
    }
}