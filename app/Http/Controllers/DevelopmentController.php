<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DevelopmentController extends Controller
{
    public function index() {
        return view('dev.create_app');
    }

    public function store(Request $req) {

        // Prueba con imagenes
        $imagen = $req->file('app-img')->store('public/apps_img');

        $url = Storage::url($imagen);

        Application::create([
            'name' => 'Prueba nueva',
            'category' => 'Categoria prueba',
            'description' => 'Description prueba',
            'price' => 1750,
            'created_by' => 1,
            'logo_url' => $url
        ]);

        return redirect()->route('dashboard');
    }
}
