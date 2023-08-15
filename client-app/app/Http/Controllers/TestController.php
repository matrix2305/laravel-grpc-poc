<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Protobuf\Clients\NotificationClient;

class TestController extends Controller
{
    public function test()
    {
        $client = new NotificationClient();
       $Msg = $client->send();
       dd($Msg->getMsg());
    }
}
