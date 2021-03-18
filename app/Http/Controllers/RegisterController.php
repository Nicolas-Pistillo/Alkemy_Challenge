<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterNewUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function store(RegisterNewUser $succesUser) {
        $role = $succesUser->type_user;

        $succesUser = User::create($succesUser->all());
        $succesUser->assignRole($role);

        return view('register',compact('succesUser'));
    }
}
