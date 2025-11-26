<?php 
 namespace App\Http\Controllers; 

 class ProductController extends Controller{

    public function show($pid){
        //Comment this line in case the join select query fails
        //$product = Products::where('product_id', $pid)->first();
        $product = DB::table('products')
            ->join('product_media', 'products.product_id', '=', 'product_media.product_id')
            ->select('products.*', 'product_media.*')
            ->where('product_id', $pid)
            ->first(); 
        return view('/show', array('product'=>$product));
    }
 }

