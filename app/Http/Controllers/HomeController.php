<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

     $products = DB::table('products')
         ->join('product_media', 'products.product_id', '=', 'product_media.product_id')
         ->select('products.*', 'product_media.url')
         ->take(25)
         ->get();

        return view('home', compact('products'));
    }



}
