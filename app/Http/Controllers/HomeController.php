<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = ProductController::orderBy('created_at')->take(8)->get();
        return view('home.index',[
            '$products' => $products
        ]);
    }
}
