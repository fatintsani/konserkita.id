<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Concert;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function store(Request $request)
{
    $cart = session()->get('cart', []);

    if (empty($cart)) {
        return redirect()->route('cart.index')->with('error', 'Keranjang kosong.');
    }

    $order = Order::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'total_price' => array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)),
    ]);

    foreach ($cart as $item) {
        $order->items()->create([
            'concert_id' => $item['id'],
            'price' => $item['price'],
            'quantity' => $item['quantity'],
            'total' => $item['price'] * $item['quantity'],
        ]);
    }

    session()->forget('cart');

    return redirect()->route('home')->with('success', 'Pesanan berhasil dibuat.');
}

}
