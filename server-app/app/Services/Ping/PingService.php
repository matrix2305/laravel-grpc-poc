<?php

namespace App\Services\Ping;

use GrpcServices\Echo\Messages\PingMessage;
use Illuminate\Support\Facades\Log;
use Spiral\RoadRunner\GRPC\ContextInterface;

class PingService implements PingRepository
{
    public function Ping(ContextInterface $ctx, PingMessage $in) : PingMessage
    {
        Log::info('Poruka sa GRPC srv'. $in->getMsg());
        $in->setMsg('Vracena poruka');
        return $in;
    }
}
