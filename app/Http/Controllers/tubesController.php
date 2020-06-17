<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Charts\CovidChart;

class tubesController extends Controller
{
    public function index()
    {
    	$response = Http::get('https://api.kawalcorona.com');
    	$data = $response->json();

    	return view('awal',compact('data'));
    }
    public function data()
	{
    	$response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
    	$data = $response->json();

    	return view('data',compact('data'));
	}

	public function grafik()
    {
        $suspects = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        
        $labels = $suspects->flatten(1)->pluck('Provinsi');
        $data   = $suspects->flatten(1)->pluck('Kasus_Posi');
        $colors = $labels->map(function($item) {
            return $rand_color = '#' . substr(md5(mt_rand()), 0, 6);
        });

        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Kasus Positif', 'pie', $data)->backgroundColor($colors);

        return view('grafik', ['chart' => $chart,]);
    }
}
