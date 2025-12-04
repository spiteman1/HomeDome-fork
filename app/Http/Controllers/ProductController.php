<?php
 namespace App\Http\Controllers;
 use Illuminate\Support\Facades\DB;

 class ProductController extends Controller{

    public function show($pid){
        //Comment this line in case the join select query fails
        //$product = Products::where('product_id', $pid)->first();
        $rows = DB::table('products')
            ->join('product_media', 'products.product_id', '=', 'product_media.product_id')
            ->join('reviews', 'products.product_id', '=', 'reviews.product_id')
            ->select(
                //Products
                'products.product_id',
                'products.name',
                'products.sku',
                'products.price',
                'products.stock_quantity',
                'products.description',
                'products.dimensions',
                'products.energy_rating',
                'products.is_available',
                //Media
                'product_media.url',
                'product_media.media_type',
                //Reviews
                'reviews.rating',
                'reviews.review_text',
                'reviews.rating',
                'reviews.submission_date',
                'reviews.is_approved'
            )
            ->where('products.product_id', $pid)
            ->get();

        //Grouping the data
        $product = [
            'product_id' => $rows[0]->product_id,
            'name' => $rows[0]->name,
            'sku' => $rows[0]->sku,
            'price' => $rows[0]->price,
            'stock_quantity' => $rows[0]->stock_quantity,
            'description' => $rows[0]->description,
            'dimensions' => $rows[0]->dimensions,
            'energy_rating' => $rows[0]->energy_rating,
            'is_available' => $rows[0]->is_available,

            //Combine the media
            'media' => $rows->map(fn($r) => [
                'type' => $r->media_type,
                'url' => $r->url
            ])->unique('url')->values()->all(),

            //Combine the reviews
            'reviews' => $rows->map(fn($r) => [
                'text' => $r->review_text,
                'rating' => $r->rating,
                'approved' => $r->is_approved,
                'submission_date'=> $r->submission_date
            ])->unique('text')->values()->all()
        ];

        return view('/product', array('product'=>$product));
    }
 }

