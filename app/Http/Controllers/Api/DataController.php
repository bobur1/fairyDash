<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\RawData;

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
}
