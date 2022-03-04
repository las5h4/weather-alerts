<?php

namespace App\Sidecar;

use Hammerstone\Sidecar\LambdaFunction;
use Hammerstone\Sidecar\Package;

class HelloWorld extends LambdaFunction
{

    public function handler()
    {
        return 'sidecar/helloWorld@handler';
    }

    public function package()
    {
        return [
            'sidecar/helloWorld.js'
        ];
    }
}
