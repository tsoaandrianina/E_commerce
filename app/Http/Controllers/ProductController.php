<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ajouterproduit(){
        return view('admin.ajouterproduit');
    }

    public function sauverproduit(){

    }

    public function produits(){
        return view('admin.produits');
    }
}
