<?php


namespace App\Sidecar;


use Hammerstone\Sidecar\LambdaFunction;
use Hammerstone\Sidecar\Package;

class CheckAlerts extends LambdaFunction
{

    public function handler()
    {
        return 'sidecar/checkAlerts@handler';
    }

    public function package()
    {
        return [
            'sidecar/checkAlerts.js'
        ];
    }

    public function layers()
    {
        return ['arn:aws:lambda:us-east-1:407939674396:layer:axios:1'];
    }
}
