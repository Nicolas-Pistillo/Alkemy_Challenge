<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewAppRequest;
use App\Http\Requests\UpdateAppRequest;
use App\Models\Application;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

    public function show($app_id) {
        $app_show = Application::where('id',$app_id)->first();

        return view('dev.app_dev_show',compact('app_show'));
    }

    public function edit($app_id) {
        $edit_app = Application::where('id',$app_id)->first();

        return view('dev.app_dev_edit',compact('edit_app'));
    }

    public function update(UpdateAppRequest $app, $edit_app) {
        //$imagen = $updated_app->file('app-img')->store('public/apps_img');

        //$url = Storage::url($imagen);

        //$id_app = $edit_app;

        $app_given = Application::where('id',$edit_app)->first();

        return $app_given;
    }
}
