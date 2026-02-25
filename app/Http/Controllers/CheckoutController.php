<?php
namespace App\Http\Controllers; 
use Illuminate\Support\Facades\DB; 
use App\Services\PersonalisedAdvertisedService; 

class CheckoutController extends Controller { 

    public function index($orderID, PersonalisedAdvertisedService $ads){
        $rows = DB::table('orders')
            ->join('order_items', 'orders.id', '=', 'order_items.order_id')
            ->join('products', 'order_items.product_id', '=', 'products.id')
            ->join('product_media', 'products.id', '=', 'products_media.product_id')
            ->select(
                'products.id', 
                'products.name', 
                'products.price', 
                'product_media.url', 
                'product_media.media_type', 
                'order_items.quantity'
            )
            ->where('orders.id', $orderID)
            ->get(); 

        $orderedProducts = [
            'id' => $rows[0]->id, 
            'name' => $rows[0]->name, 
            'price' => $rows[0]->price, 
            
            'media' => $rows->map(fn($r) => [
                'type' => $r->media_type, 
                'url' => $r->url
            ])->unique('url')->values()->all(), 

            'quantity' => $rows[0]->quantity
        ]; 

        //Suggest products for the user
        $advertisedProducts = $ads->personalisedAdvertising(Auth::id()); 
        $backupProducts = $ads->generateRandomProducts(5); //Select 5 backup products

        return view('/checkout', compact('orderedProducts', 'advertisedProducts', 'backupProducts')); 
    }
}