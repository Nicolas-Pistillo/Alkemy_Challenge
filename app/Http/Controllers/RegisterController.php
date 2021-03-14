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

    public function store(RegisterNewUser $new_user) {
        $role = $new_user->type_user;

        $new_user = User::create($new_user->all());
        $new_user->assignRole($role);

        return $new_user;
    }
}
