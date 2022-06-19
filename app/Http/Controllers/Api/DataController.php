<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\RawData;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = RawData::first();
        return response()->json([
           $data->data
        ], 200);
    }

    public function update(Request $request)
    {
        RawData::updateOrCreate(['id'=>1], ['data'=>$request->all()]);
    }

    public function sendTwitter(Request $request)
    {
        $arr = [
            'accountsFrom' => [],
            'keywords' => [],
            'hashtags' => [],
            'cashtags' => []
        ];
        $arr = array_merge($arr,$request->all());

        $response = Http::post('http://18.196.221.150:5500/twitter', $arr);
        return $response;
    }
}
