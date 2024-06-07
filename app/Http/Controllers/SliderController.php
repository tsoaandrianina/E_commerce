<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function ajouterslider(){
        return view('admin.ajouterslider');
    }

    public function sliders(){
        return view('admin.sliders');
    }
}
