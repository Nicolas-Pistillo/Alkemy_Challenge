<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class DashboardController extends Controller
{

    public function index() {

        $appsDev = auth()->user()->apps;

        return view('dev.dashboard',compact('appsDev'));
    }
}
