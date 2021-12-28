<?php

namespace App\Http\Controllers;

use App\Order;
use App\Oders_detail;
use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function ddCart(Request $request)
    {
        $product = Product::find($request->product_id);

        $cartInfo = [
            'id' => $request->product_id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qty
        ];
        Cart::add($cartInfo);
        $cart = Cart::getContent();
//        dd($cart);
       return view("frontend.pages.cart", compact('cart'));
    }

    public function getCart()
    {
        $cart = Cart::getContent();
        return view("frontend.pages.cart", compact('cart'));

    }

    public function updateCart(Request  $request)
    {
        $id = $request->id;
        $qty = $request->quantity;

//        dd($request->quantity);
        Cart::update($id, array(

            'quantity' => array(
                'relative' => false,
                'value' => $qty
            ),
        ));
        $cart = Cart::getContent();
//        dd($cart);
        return redirect()->route('get_cart');
    }

    public function removeCart($id)
    {
        Cart::remove($id);
        return redirect()->route('get_cart');
    }

    public function getPayment()
    {
        return view("frontend.pages.payment");

    }

    public function postPayment(Request  $request)
    {
        $order = new Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
//        $order->address = $request->Address;
        $order->note = $request->note;
        $order->address = $request->address;
        $order->total = Cart::getSubTotal();

        $order->save();
        $order_id = $order->id;
        foreach (Cart::getContent() as $row) {
            $detail = new Oders_detail();
            $detail->pro_id = $row->id;
            $detail->qty = $row->quantity;
            $detail->id_order = $order_id;
            $detail->save();
        }
        Cart::clear();
        return redirect()->route('home_page');

    }
}
