<?php

namespace App\Services\Ping;
use Spiral\RoadRunner\GRPC\ServiceInterface;

interface PingRepository extends ServiceInterface
{
    const NAME = 'services.Echo';

}
