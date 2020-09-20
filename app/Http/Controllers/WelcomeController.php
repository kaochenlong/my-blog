<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function about() {
        $name = "悟空";
        return view("pages.about", ['name' => $name]);
    }
}
