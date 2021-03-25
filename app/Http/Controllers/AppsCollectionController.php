<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buy;

class AppsCollectionController extends Controller
{
    public function index(Buy $buys) {

        $clientID = auth()->user()->id;

        $boughts = $buys->where('client',$clientID)->get();

        return view('client.myapps',compact('boughts'));
    }
}
