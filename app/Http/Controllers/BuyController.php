<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function index() {
        $obj = [
            'name' => 'Nicolas',
            'surname' => 'Pistillo',
            'alias' => 'pisty',
            'langs' => ['javascript','html','css','php'],
            'search_job' => true
        ];

        $obj2 = array(
            'name' => 'Nicolas',
            'surname' => 'Pistillo',
            'alias' => 'pisty',
            'langs' => array('javascript','html','css','php'),
            'search_job' => true,
            'studing' => true
        );

        header('Content-type: application/json');

        return $obj;
    }
}
