<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function ajoutercategorie(){
        return view('admin.ajoutercategorie');
    }

    public function sauvercategori(Request $request){

    }

    public function categories(){
        return view('admin.categories');
    }
}
