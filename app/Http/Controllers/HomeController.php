<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;
use App\Models\Product;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $masters = Master::all(); 
        $products = Product::orderBy("created_at", "DESC")->limit(8)->get();

        $service = $request->input('service');
        if ($service) {
            $masters = Master::where('service', $service)->get();
        }

        return view('home', compact('masters', 'products', 'service'));
    }
   
}
