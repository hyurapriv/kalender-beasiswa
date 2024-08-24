<?php

namespace App\Services;

use Twilio\Rest\Client;

class TwilioService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(config('services.twilio.sid'), config('services.twilio.token'));
    }

    public function sendOtp($to, $otp)
    {
        $message = "Your OTP code is: $otp";

        return $this->client->messages->create(
            $to,
            [
                'from' => config('services.twilio.whatsapp_from'),
                'body' => $message,
            ]
        );
    }
}
