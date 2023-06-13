<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Billing;
use App\Models\Upazila;
use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\BillingStoreRequest;
use App\Mail\PurchaseConfirm;
use App\Models\ChippingCharge;
use App\Models\OrderDetails;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{

    public function placeOrder(BillingStoreRequest $request)
    {
        $request->validated();


        $shipping_charge = ChippingCharge::first();


        if ($request->shipping_method == 'in_dhaka') {
            $charge = $shipping_charge->in_side_dhaka;
        } else {
            $charge = $shipping_charge->out_side_dhaka;
        }

        $subtotal = Cart::subtotalFloat();
        $total = Cart::totalFloat();

        $billing = Billing::create([
            'fullname' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'billing_id' => $billing->id,
            'sub_total' => $subtotal,
            'shiping_charge' => $charge,
            'total' => $total + $charge,
        ]);

        $cartItems = Cart::content();

        foreach ($cartItems as $cartItem) {
            OrderDetails::create([
                'user_id' => Auth::id(),
                'order_id' => $order->id,
                'product_id' => $cartItem->id,
                'product_price' => $cartItem->price,
                'product_qty' => $cartItem->qty,
            ]);
            Product::find($cartItem->id)->decrement('product_stock', $cartItem->qty);
        }
        Cart::destroy();

        $order = Order::whereId($order->id)->with(['billing', 'orderdetails'])->get();


        Toastr::success('Shopping completed,See you again', 'Successfully');

        return redirect()->route('home');
    }

    public function addToCart(Request $request)
    {
        // dd($request->all());
        $product_slug = $request->product_slug;
        $order_qty = $request->order_qty;

        $product = Product::where('product_slug', $product_slug)->first();

        Cart::add([
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'qty' => $order_qty,
            'product_image' => $product->product_image,
            'weight' => 0,
            // 'options' => [
            // ]

        ]);


        return redirect()->route('checkout.view');
    }

    public function checkoutView()
    {
        $shipping_charge = ChippingCharge::first();

        // dd($shipping_charge);

        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        $data = [
            'carts' => $carts,
            'total' => $total,
            'subtotal' => $subtotal,
        ];


        return view('frondend.pages.checkout', compact('data', 'shipping_charge'));
    }

    public function removeCartItem($cart_item_id)
    {
        $remove = Cart::remove($cart_item_id);
        Toastr::info('Product Removed form Cart');
        return redirect()->back();
    }

    public function increment(Request $request)
    {
        $qty = $request->d_qty + 1;
        Cart::update($request->d_product_id, $qty);
        return redirect()->back();
    }
    public function decrement(Request $request)
    {
        if ($request->d_qty == 1) {
            $qty = 1;
        } else {
            $qty = $request->d_qty - 1;
        }
        Cart::update($request->d_product_id, $qty);
        return redirect()->back();
    }
}
