<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
public function show($slug){
$results = DB::table('products')
    ->join('product_media', 'products.product_id', '=', 'product_media.product_id')
    ->join('product_category', 'products.product_id', '=', 'product_category.product_id')
    ->join('categories', 'product_category.category_id', '=', 'categories.category_id')
    ->select(
        'products.*',
        'product_media.url',
        'categories.category_id',
        'categories.name as category_name'
    )
    ->where('categories.slug','=', $slug)
    ->get();



                return view('category', compact('results','slug'));
}
}
