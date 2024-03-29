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

    public function update(UpdateAppRequest $app_update, $edit_app) {

        $app_given = Application::where('id',$edit_app)->first();

        $url = str_replace('storage','public',$app_given->logo_url);
        Storage::delete($url);

        $newImage = $app_update->file('app-img')->store('public/apps_img');

        $urlNew = Storage::url($newImage);

        $app_given->price = $app_update->price;
        $app_given->description = $app_update->description;
        $app_given->logo_url = $urlNew;

        $app_given->save();

        $id = $app_update->id;

        return redirect()->route("development.show","$edit_app")->with('updatedOK','updated');
    }

    public function destroy($app) {

        $delete_app = Application::where('id',$app)->first();

        $url = str_replace('storage','public',$delete_app->logo_url);
        Storage::delete($url);

        $delete_app->delete();

        return redirect()->route('dashboard')->with('deleteOK','deleted');
    }
}
