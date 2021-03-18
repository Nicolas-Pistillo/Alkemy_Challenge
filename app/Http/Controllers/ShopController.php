<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Application $apps) {

        $total_apps = $apps->all();

        return view('client.shop',compact('total_apps'));
    }
}
