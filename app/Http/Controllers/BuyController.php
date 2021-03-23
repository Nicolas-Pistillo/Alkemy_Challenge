<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Http\Controllers\ApiController;

class BuyController extends ApiController
{
    public function index(Application $app) {
        $apps = $app->all();

        return $this->sendResponse($apps,"Que disfrutes de las aplicaciones");
    }

    public function show(Request $app) {
        $find = $app->id;

        $app_return = Application::where('id',$find)->first();

        if (!$app_return) {
            return $this->sendError($app_return,"No se ha encontrado una aplicacion con esas credenciales");
        }

        $dev = $app_return->developer->name;

        return $this->sendResponse($app_return,"Que disfrutes tu aplicacion");
    }

    public function destroy() {

    }
}
