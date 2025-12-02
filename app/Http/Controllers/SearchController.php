<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
     public function search(Request $request)
            {
                $query = $request->input('query');


                if (!$query) {
                    return redirect()->back()->with('error', 'Please enter a search term!');
                }


                $results =   DB::table('products')
                                    ->join('product_media', 'products.product_id', '=', 'product_media.product_id')
                                    ->select('products.*', 'product_media.url')
                                    ->where('name','like',"%{$query}%")
                                    ->orWhere('description','like',"%{$query}%")

                                    ->get();


                return view('search', compact('results', 'query'));
            }
}
