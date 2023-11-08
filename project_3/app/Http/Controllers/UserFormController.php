<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function showUser(Request $req){
        // return $req->input();
        //  return $req->input('firstName');
        //  return $req->url();
        // return $req->path();
        //return $req->method();
        //return $req->all();

        $req->validate([
            'firstName' => 'required | min:3 | max:10',
            'lastName' => 'required | min:3 | max:20',
            'mail' => 'required | email'
        ],
        [
          'firstName.required' => 'Das Feld :attribute ist erforderlich',
            'lastName.required' => 'Das Feld :attribute ist erforderlich',
            'mail.required' => 'Das Feld :attribute ist erforderlich',
            'firstName.min' => 'Pole :attribute musi miec miniumum 3 znaki',
            'firstName.max' => 'Pole :attribute moze miec maksimum 10 znakow',
            'lastName.min' => 'Pole :attribute musi miec miniumum 3 znaki',
            'lastName.max' => 'Pole :attribute moze miec maksimum 10 znakow',
            'mail.email' => 'Pole :attribute musiy być typu email',
            ]);

        $dataUser = [
            'firstName' => $req->input('firstName'),
            'lastName' => $req->input('lastName'),
            'mail' => $req->input('mail'),
        ];

        return view('user', ['user' => $dataUser]);

    }
}
