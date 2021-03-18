<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewAppRequest;
use App\Models\Application;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DevelopmentController extends Controller
{
    public function index(Category $categories) {

        $categories = $categories->all();

        return view('dev.create_app',compact('categories'));
    }

    public function store(NewAppRequest $newApp) {

        $dev_id = auth()->user()->id;

        $imagen = $newApp->file('app-img')->store('public/apps_img');

        $url = Storage::url($imagen);

        $app_create = Application::create([
            'name' => $newApp->name,
            'description' => $newApp->description,
            'price' => $newApp->price,
            'logo_url' => $url,
            'created_by' => $dev_id,
            'category' => $newApp->category,
        ]);

        return redirect()->route('development.index')->with('created_ok','nomessage');

    }
}
