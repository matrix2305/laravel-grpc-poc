<?php
namespace App\Protobuf\Clients;

use GrpcServices\Echo\Messages\PingMessage;
use vandarpay\LaravelGrpc\GrpcClient;

class NotificationClient extends GrpcClient
{
    protected string $service = 'services.notification';

    public function send() : PingMessage
    {
        $ping = new PingMessage();
        $ping->setMsg('Test 123');
        $this->client->setServiceName('services.Echo');
        return $this->client->simpleRequest('Ping', $ping);
    }
}
