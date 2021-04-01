<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Http\Controllers\ApiController;
use App\Models\Buy;

class AjaxController extends ApiController
{

    public function store(Request $req) {

        // Se recupera el ID de la aplicacion enviado desde AJAX y el usuario que realizo la petición

        $find = $req->id;

        $user = $req->user()->id;

        $app_return = Application::where('id',$find)->first();

        // Si no existe una aplicacion con ese ID, se devuelve un JSON con el error

        if (!$app_return) {
            return $this->sendError($app_return,"No se ha encontrado una aplicacion con esas credenciales");
        }

        // Si la aplicacion existe, se guarda en la tabla "buys" su ID junto con el ID del usuario que realizo la peticion ajax

        $new_buy = Buy::create([
            'client' => $user,
            'app' => $find
        ]);

        return $this->sendResponse($new_buy,"Añadido con exito");

    }

    public function destroy(Request $req) {

        $appToDelete = Buy::where('client',$req->user()->id)
        ->where('app',$req->get('id'))->first();

        if (!$appToDelete) {
            return $this->sendError('NULL given',"No se ha encontrado una aplicación correspondiente al usuario registrado");
        }

        $appToDelete->delete();

        return $this->sendResponse($appToDelete,"Aplicación eliminada");
    }
}
