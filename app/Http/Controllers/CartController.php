<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function add($concertId)
    {
        $concert = Concert::findOrFail($concertId);

        $cart = session()->get('cart', []);

        if (isset($cart[$concertId])) {
            $cart[$concertId]['quantity'] += 1;
        } else {
            $cart[$concertId] = [
                'id' => $concert->id,
                'title' => $concert->title,
                'image' => $concert->image,
                'price' => $concert->price,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Konser berhasil ditambahkan ke cart!');
    }

    public function remove($concertId)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$concertId])) {
            unset($cart[$concertId]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Item berhasil dihapus.');
    }

    public function clear()
    {
        session()->forget('cart');

        return redirect()->route('cart.index')->with('success', 'Cart dikosongkan.');
    }

    public function increase($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }
        session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function decrease($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            if ($cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity']--;
            }
        }
        session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }
}
