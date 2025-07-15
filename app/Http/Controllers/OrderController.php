<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Concert;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Keranjang kosong.');
        }

        $totalPrice = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));

        $order = Order::create([
            'customer_name' => 'Guest',
            'customer_email' => 'guest@example.com',
            'total_price' => $totalPrice,
        ]);

        foreach ($cart as $item) {
            OrderItem::create([
                'order_id'      => $order->id,
                'concert_id'    => $item['id'],
                'concert_title' => $item['title'],
                'concert_image' => $item['image'],
                'price'         => $item['price'],
                'quantity'      => $item['quantity'],
                'total'         => $item['price'] * $item['quantity'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('cart.index')->with('success', 'Pesanan berhasil dibuat!');
    }
}
