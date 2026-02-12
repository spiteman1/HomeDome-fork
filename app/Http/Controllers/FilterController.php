<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
public function filter(Request $request)
    {
        $query = $request->input('query');
        $priceVal=$request->input('priceVal');
        $catVal=$request->input('catVal');

        if (!$query) {
            return redirect()->back()->with('error', 'Please enter a search term!');
        }
    if ($priceVal == "0-50") {
        $priceVal = "price < 50";
    }
    elseif ($priceVal == "50-100") {
        $priceVal = "price >= 50 AND price <= 100";
    }
    elseif ($priceVal == "100-200") {
        $priceVal = "price >= 100 AND price <= 200";
    }
    elseif ($priceVal == "200-300") {
        $priceVal = "price >= 200 AND price <= 300";
    }
    elseif ($priceVal == "300+") {
        $priceVal = "price >= 300";
    }
    if ($catVal && $priceVal ){
        $results = DB::table('products')
                     ->join('product_category', 'products.id', '=', 'product_category.product_id')
                       ->join('categories', 'product_category.category_id', '=', 'categories.id')
                      ->select('products.*', DB::raw('(SELECT url FROM product_media WHERE product_media.product_id = products.id AND media_type = "image" LIMIT 1) as url'))
                       ->where(function($q) use ($query) {
                           $q->where('products.name', 'like', "%{$query}%")
                            ->orWhere('categories.name', 'like', "%{$query}%");
                                                                                               })
                       ->where('categories.name', 'like', "%{$catVal}%")
                       ->whereRaw($priceVal)


                    ->get();
                    return view('filter', compact('results', 'query'));}
    if ($catVal){
    $results = DB::table('products')
                         ->join('product_category', 'products.id', '=', 'product_category.product_id')
                           ->join('categories', 'product_category.category_id', '=', 'categories.id')
                          ->select('products.*', DB::raw('(SELECT url FROM product_media WHERE product_media.product_id = products.id AND media_type = "image" LIMIT 1) as url'))
                           ->where(function($q) use ($query) {
                                $q->where('products.name', 'like', "%{$query}%")
                                ->orWhere('categories.name', 'like', "%{$query}%");
                                                                         })
                             ->where('categories.name', 'like', "%{$catVal}%")

                        ->get();

    }
    elseif($priceVal){
    $results = DB::table('products')
                         ->join('product_category', 'products.id', '=', 'product_category.product_id')
                           ->join('categories', 'product_category.category_id', '=', 'categories.id')
                          ->select('products.*', DB::raw('(SELECT url FROM product_media WHERE product_media.product_id = products.id AND media_type = "image" LIMIT 1) as url'))
                        ->where(function($q) use ($query) {
                              $q->where('products.name', 'like', "%{$query}%")
                               ->orWhere('categories.name', 'like', "%{$query}%");
                                               })
                           ->whereRaw($priceVal)


                        ->get();
    }


    if(!$catVal && !$priceVal){
        $results = DB::table('products')
                    ->join('product_category', 'products.id', '=', 'product_category.product_id')
                    ->join('categories', 'product_category.category_id', '=', 'categories.id')
                    ->select('products.*', DB::raw('(SELECT url FROM product_media WHERE product_media.product_id = products.id AND media_type = "image" LIMIT 1) as url'))
                   ->where('products.name', 'like', "%{$query}%")
                       ->orWhere('categories.name', 'like', "%{$query}%")

                    ->get();




    }
     return view('filter', compact('results', 'query'));}

}
