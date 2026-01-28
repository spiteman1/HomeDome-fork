<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PersonalAdvertisingController {

    //Get ids of the products of the users past orders
    public function getProductIDandCategoryBought(){
        $productsBought = DB::table('orders')
            ->join('order_items', 'order.id', '=', 'order_items.order_id')
            ->join('products', 'order_items.product_id', '=', 'products.id')
            ->join('product_category', 'order_items.product_id', '=', 'product_category.product_id')
            ->join('categories', 'product_category.category_id', '=', 'categories.id')
            ->select('products.id as product_id', 'categories.name as category_name')
            ->where('orders.user_id', Auth::id())
            ->get(); 
        return $productsBought; 
    }

    //Add a category to dictionary (associative array of arrays) if category doesnt exist
    //And append item to that category if it doesn't exist in that array
    public function addToDictionaryIfNotExist($dict, $group, $item){
        if (!array_key_exists($group, $dict)){
            $dict[$group] = []; //Create an empty array if it doesn't exist
        }
        if (!in_array($value, $dict[$group], true)){
            $dict[$group][] = $value; //Add item to an array if it doesn't exist
        }
    }

    //Considering the id array given - return the product information about those product ids
    public function getProductsById($idArray){
        $products = []; 
        foreach($idArray as $id){
            $rows = DB::table('products')
                ->leftJoin('product_media', 'products.id', '=', 'product_media.product_id')
                ->select(
                    //Products
                    'products.id',
                    'products.name',
                    //sku, stock_quantity, description, dimensions, energy_rating, is_available omitted
                    //may be added later in case those informations are required
                    'products.price',
                    //Media
                    'product_media.url',
                    'product_media.media_type',
                )
                ->where('products.id', $id)
                ->get(); 

            //Grouping the medias - if more than one url is present
            $product = [
                'id' => $rows[0]->id,
                'name' => $rows[0]->name,
                'price' => $rows[0]->price,

                //Combine the media
                'media' => $rows->map(fn($r) => [
                    'type' => $r->media_type,
                    'url' => $r->url
                ])->unique('url')->values()->all(),
            ]; 
            $products[] = $product; 
        }
    }


}