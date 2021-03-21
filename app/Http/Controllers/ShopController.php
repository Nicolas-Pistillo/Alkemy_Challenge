<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterCategoryRequest;
use App\Models\Application;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Application $apps, FilterCategoryRequest $search) {

        $total_apps = $apps->all();
        $categories = Category::all(); // Todas las categorias para el select-option

        if (isset($search->searchBy)) {
            $id_category = $search->searchBy;
            $total_apps = $apps->where('category',$id_category)->get(); // Apps con ID de categoria obtenida en el select-option
        }

        return view('client.shop',compact('total_apps','categories'));
    }
}
