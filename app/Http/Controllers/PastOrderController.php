<?php 
namespace App\Http\Controllers; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Auth;

class PastOrderController extends Controller {
    public function index(){
        //Get general order information of all the orders user has made
        $orders = DB::table('orders')
            ->select(
                'id', 
                'order_date', 
                'total_amount', 
                'status'
            )
            ->where('user_id', Auth::id())
            ->get(); 
        
        
        // Get product items for all orders
        $rows = DB::table('orders')
            ->join('order_items', 'orders.id', '=', 'order_items.order_id')
            ->join('products', 'order_items.product_id', '=', 'products.id')
            ->join('product_media', 'products.id', '=', 'product_media.product_id')
            ->select(
                'orders.id as order_id',
                'products.id as product_id',
                'products.name',
                'products.price',
                'product_media.url',
                'product_media.media_type',
                'order_items.quantity'
            )
            ->where('orders.user_id', $userId)
            ->get();

        //Group the products
        $groupedProducts = $rows->groupBy('order_id')->map(function($items){
            $first = $items->first(); 

            return [
                'id' => $first->product_id, 
                'name' => $first->name, 
                'price' => $first->price, 
                'quantity' => $first->quantity, 
                'media' => $items->map(fn ($r) => [
                    'type' => $r->media_type, 
                    'url' => $r->url
                ]) 
            ]; 
        }); 

        //Attach products to each order
        $ordersWithItems = $orders->map(function ($order) use ($groupedProducts){
            $order->order_items = $groupedProducts[$order->id] ?? []; 
            return $order; 
        }); 

        return view('/pastOrders', array('orders' => $ordersWithItems)); 
    }

}