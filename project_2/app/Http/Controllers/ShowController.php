<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(){
        return "controller";
    }

    public function showFirstName(){
        $data = [
            'firstName' => 'Janusz',
            'lastName' => 'Jankowski',
            'city' => 'Poznan'
        ];
        return View('data', $data)
        ;
    }
}
