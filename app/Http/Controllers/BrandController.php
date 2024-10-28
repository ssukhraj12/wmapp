<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function brands()
    {
        $brands = Brand::get();
        return response()->json(['brands'=> $brands],200);
    }

    public function addBrand(Request $request)
    {
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->save();

        $brands = Brand::get();

        return response()->json(['brand' => $brands],200);
    }
}
