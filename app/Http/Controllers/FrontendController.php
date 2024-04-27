<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CheckoutRequest;
use App\Models\ItemTransaction;
use Exception;
use Midtrans\Config;
use Midtrans\Snap;

class FrontendController extends Controller
{
    public function index(Request $request){
        $products=Product::with(['galleries'])->latest()->get();
        return view("pages.frontend.index", compact('products'));
    }

    public function details(Request $request, $slug){
        $product=Product::with(['galleries'])->where('slug',$slug)->firstOrFail();
        $recommendations=Product::with(['galleries'])->inRandomOrder()->limit(4)->get();
        return view("pages.frontend.details", compact('product','recommendations'));
    }

    public function cartAdd(Request $request, $id){
        Cart::create([
            "users_id" => Auth::user()->id,
            "products_id" => $id
        ]);
        return redirect("cart");
    }

    public function cart(Request $request){
        $carts=Cart::with(['product.galleries'])->where('users_id', Auth::user()->id)->get();
        return view("pages.frontend.cart", compact("carts"));
    }

    public function success(Request $request){
        return view("pages.frontend.success");
    }
    public function blog(Request $request){
        return view("pages.frontend.blog");
    }
    public function blog1(Request $request){
        return view("pages.frontend.blog/blog1");
    }
    public function blog2(Request $request){
        return view("pages.frontend.blog/blog2");
    }
    public function blog3(Request $request){
        return view("pages.frontend.blog/blog3");
    }
    public function contact(Request $request){
        return view("pages.frontend.contact");
    }

    public function cartDelete(Request $request, $id){
        $item=Cart::findOrFail($id);

        $item->delete();

        return redirect("cart");
    }

    public function checkout(CheckoutRequest $request){
        $data = $request->all();
    
        // Get Carts Data
        $carts = Cart::with(["product"])->where("users_id", Auth::user()->id)->get();
    
        // Calculate total price from cart items
        $totalPrice = $carts->sum("product.price");
    
        // Add fixed amount of 20000 to the total price
        $totalPrice += 15000;
    
        // Add to Transaction data  
        $data["users_id"] = Auth::user()->id;
        $data["total_price"] = $totalPrice;    

        // Create transaction
        $transaction=Transaction::create($data);
        
        // Create  transaction item
        foreach($carts as $cart){
            $items[]=ItemTransaction::create(["transactions_id" => $transaction->id,"users_id" => $cart->users_id, "products_id" => $cart->products_id]);
        }

        // Delete cart after transaction
        Cart::where("users_id", Auth::user()->id)->delete();

        // Konfigurasi midtrans
        Config::$serverKey=config("services.midtrans.serverKey");
        Config::$isProduction=config("services.midtrans.isProduction");
        Config::$isSanitized=config("services.midtrans.isSanitized");
        Config::$is3ds=config("services.midtrans.is3ds");

        // Setup variable midtrans
        $midtrans=[
            "transaction_details" => [
                "order_id" => "LUX-".$transaction->id,
                "gross_amount" => (int) $transaction->total_price
            ],
            "customer_details" => [
                "first_name" => $transaction->name,
                "email" => $transaction->email,
            ],
            "enabled_payment" => ["gopay","bank_transfer"],
            "vtweb" => []
        ];

        // Payment process
        try{
            $paymentUrl=Snap::createTransaction($midtrans)->redirect_url;
            $transaction->payment_url=$paymentUrl;
            $transaction->save();

            return redirect($paymentUrl);
        }catch(Exception $except){
            echo $except->getMessage();
        }

        return $request->all();
    }
}
