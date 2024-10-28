<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allProducts()
    {
        $allpros = "All Products";
        return view('products.products',compact('allpros'));
    }

    public function addProduct()
    {
        $allpros = "All Products";
        return view('products.add',compact('allpros'));
    }
}
