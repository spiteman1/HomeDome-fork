<?php 
 namespace App\Http\Controllers; 

 class ProductController extends Controller{

    public function show($pid){
        $product = Product::where('product_id', $pid)->first();
        return view('/show', array('product'=>$product));
    }
 }

