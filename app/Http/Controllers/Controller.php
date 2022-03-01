<?php

namespace App\Http\Controllers;

use App\Sidecar\CheckAlerts;
use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $endpoint = '';

    /**
     * Controller constructor.
     */
    public function __construct()
    {

    }

    public function showForecast()
    {
        $client = new Client();
        $response = $client
            ->request('GET', 'https://api.weather.gov/gridpoints/EAX/42,51/forecast')
            ->getBody()
            ->getContents();
        $response_array = json_decode($response);
        $periods = $response_array->properties->periods;
        return view('forecast', ['periods' => $periods]);
    }

    public function showAlerts()
    {
        return CheckAlerts::execute()->body();
    }
}
