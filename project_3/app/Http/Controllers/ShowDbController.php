<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ShowDbController extends Controller
{
    public function ShowTableUsers(){
        return DB::table("users")
        ->insert([
            "name" => "krystyna",
            "email" => "krystyna@o2.pl",
            "password" => Hash::make("krystyna123"),
        ]);
    }
}
