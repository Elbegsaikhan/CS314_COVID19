<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;


class CountryController extends Controller
{
    //
    /**
     * @throws GuzzleHttp\Exception\GuzzleException
     */
    public function countryBy($country)
    {
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.covid19api.com/total/country/'.$country);
        $data = json_decode((string) $res->getBody(), true);

        if(isset($country)){
            $res = $client->request('GET', 'https://api.covid19api.com/dayone/country/'.$country.'/status/confirmed');
        }else {
            $res = $client->request('GET', 'https://api.covid19api.com/dayone/country/angola/status/confirmed');

        }
        $countryData = json_decode((string) $res->getBody(), true);
        $labels =array();
        $confirmedCase = array();
        $i = sizeof($countryData) - 20;
        for($i; $i < sizeof($countryData); $i++){
            $str = substr($countryData[$i]['Date'], 0, 10);
            $cases = $countryData[$i]['Cases'];
            array_push($labels, $str);
            array_push($confirmedCase, $cases);
        }

        $linechart = app()->chartjs
            ->name('lineChartTest')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels($labels)
            ->datasets([
                [
                    "label" => $country,
                    'backgroundColor' => "rgba(76, 81, 191, 0.31)",
                    'borderColor' => "rgba(76, 81, 191, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => $confirmedCase,
                ]
            ])
            ->options([]);

//        Country table
        $tableReq = $client->request('GET', 'https://api.covid19api.com/country/'.$country.'?from=2020-04-08T00:00:00Z&to=2020-05-08T00:00:00Z');
        $countryTableData = json_decode((string) $tableReq->getBody(), true);

        return view('country')->with('data', $data)->with('chart', $linechart)->with('countryTable', $countryTableData);
    }
}
