<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function about() {
        $heroes = ["悟空", "達爾", "鳴人", "佐助", "魯夫"];
        return view("pages.about", ['heroes' => $heroes]);
    }
}
