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

        $succesUser->password = bcrypt($succesUser->password);

        $succesUser = User::create([
            'name' => $succesUser->name,
            'surname' => $succesUser->surname,
            'alias' => $succesUser->alias,
            'email' => $succesUser->email,
            'password' => $succesUser->password
        ]);

        $succesUser->assignRole($role);

        return view('register',compact('succesUser'));
    }
}
