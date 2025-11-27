<?php 
 namespace App\Http\Controllers; 
 use Illuminate\Support\Facades\Auth;

 class BasketController extends Controller{
    public function listProducts(){
        //Get the products that the user has put into the basket
        $basketProducts = DB::table('shopping_basket')
            ->join('products', 'shopping_basket.product_id', '=', 'products.product_id')
            ->join('products_media', 'shopping_basket.product_id', '=', 'products_media.product_id')
            ->select('shopping_basket.*', 'products.*', 'product_media.*')
            ->where('shopping_basket.user_id', Auth::id()) //User ID 
            ->get(); 
        return view('/basket', $basketProducts); 
    }


    public function removeProduct(Request $request, $basket_id){
        //Remove the product based on it's basket id
        $removeProductFromBasket = DB::table('shopping_basket')
            ->where('id', $basket_id)
            ->delete(); 

        //Validate delete operation 
        if ($removeProductFromBasket){
            redirect()->route('listBasketProducts')->with('success', 'Successfully removed product from basket'); 
        } else {
            redirect()->route('listBasketProducts')->with('error', 'Unable to remove product from the basket'); 
        }
    }

    public function addProduct(Request $request, $product_id){
        //Validate the quantity so that it is an integer and it's minimum is 1
        $validateQuantity = $request->validate(['quantity'=>'required|integer|min:1']); 
        $productInsert = DB::table('shopping_baskey')
            ->insert([
                'user_id' => Auth::id(), 
                'product_id' => $product_id, 
                'quantity' => $validateQuantity
            ]); 
        
        //Verify insert operation
        if ($productInsert){
            redirect()->route('listBasketProducts')->with('success', 'Successfully added product to the basket'); 
        } else {
            redirect()->route('listBasketProducts')->with('error', 'Unable to add product to the basket'); 
        }
    }

    public function updateQuantity(Request $request, $basket_id){
        $quantity = $request->quantity;  

        if ($quantity <= 0){
            $quantity = 1; //Overwrite quantity to 1 so that it's default is 1
        }
        $update = DB::table('shopping_basket')
            ->where('id', $basket_id)
            ->update([
                'quantity', $quantity, 
            ]); 
        
        
        if ($update){
            redirect()->route('listBasketProducts')->with('success', 'Successfully updated quantity'); 
        } else {
            redirect()->route('listBasketProducts')->with('error', 'Unable to update the quantity'); 
        }
    }
 }