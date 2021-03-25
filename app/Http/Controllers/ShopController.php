<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterCategoryRequest;
use App\Models\Application;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Buy;

class ShopController extends Controller
{
    public function index(Application $apps, FilterCategoryRequest $search) {

        $total_apps = $apps->paginate(10);
        $categories = Category::orderBy('name','asc')->get(); // Todas las categorias para el select-option

        if (isset($search->searchBy)) {
            $id_category = $search->searchBy;
            $total_apps = $apps->where('category',$id_category)->get(); // Apps con ID de categoria obtenida en el select-option
            return view('client.shop',compact('total_apps','categories','id_category'));
        }

        return view('client.shop',compact('total_apps','categories'));
    }

    public function show($app) {

        $app_detail = Application::where('id',$app)->first();

        $id_user = auth()->user()->id;

        $buys = Buy::where('client',$id_user)->get();

        $has_the_app = false;

        foreach($buys as $buy) {
            if ($buy->app === $app_detail->id) {
                $has_the_app = true;
            }
        }

        return view('client.shop_detail',compact('app_detail','has_the_app'));
    }
}
