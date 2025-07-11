<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $reques)
    {
        $products = Product::all();
        return view('home', compact('products'));
    }
}
