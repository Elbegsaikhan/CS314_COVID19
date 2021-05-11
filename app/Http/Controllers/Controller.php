<?php

namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.covid19api.com/summary');
        $data = json_decode((string) $res->getBody(), true);


        return view('dashboard')->with('data',$data);
    }

//    public function countryInfo($country){
////        $country = 'mongolia';
//        $client = new GuzzleHttp\Client();
//        if(isset($country)){
//            $res = $client->request('GET', 'https://api.covid19api.com/dayone/country/'.$country.'/status/confirmed');
//        }else {
//            $res = $client->request('GET', 'https://api.covid19api.com/dayone/country/angola/status/confirmed');
//
//        }
//        $data = json_decode((string) $res->getBody(), true);
//        $labels =array();
//        $confirmedCase = array();
//        $i = sizeof($data) - 30;
//        for($i; $i < sizeof($data); $i++){
//            $str = substr($data[$i]['Date'], 0, 10);
//            $cases = $data[$i]['Cases'];
//            array_push($labels, $str);
//            array_push($confirmedCase, $cases);
//        }
//
//        $linechart = app()->chartjs
//            ->name('lineChartTest')
//            ->type('line')
//            ->size(['width' => 400, 'height' => 200])
//            ->labels($labels)
//            ->datasets([
//                [
//                    "label" => "My First dataset",
//                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
//                    'borderColor' => "rgba(38, 185, 154, 0.7)",
//                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
//                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
//                    "pointHoverBackgroundColor" => "#fff",
//                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
//                    'data' => $confirmedCase,
//                ]
//            ])
//            ->options([]);
//        return view('dashboard') ->with('chart', $linechart);
////        return view('country', compact('data'));
//    }
}
