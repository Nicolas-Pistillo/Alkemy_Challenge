<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

use App\Models\Buy;

class AppsCollectionController extends Controller
{
    public function index(Buy $buys) {

        $clientID = auth()->user()->id;

        $boughts = $buys->where('client',$clientID)->get();

        return view('client.myapps',compact('boughts'));
    }

    public function show($app) {

        $app_show = Application::where('id',$app)->first();

        return view('client.myapps_show',compact('app_show'));
    }
}
