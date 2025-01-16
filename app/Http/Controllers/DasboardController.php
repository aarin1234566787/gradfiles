<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController
{
    public function index(){
        return view('backend.content.dasboard');
    }

    public function profile(){
        return view('backend.content.profile');
    }
}
