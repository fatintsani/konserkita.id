<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function index()
    {
        $concerts = Concert::all();
        $genres = ['Pop', 'Rock', 'Jazz', 'K-Pop'];

        $upcomingConcerts = Concert::where('datetime', '>=', now())
            ->orderBy('datetime', 'asc')
            ->take(6)
            ->get();

        $testimonials = Testimonial::latest()->take(10)->get();

        return view('home', compact('concerts', 'genres', 'upcomingConcerts', 'testimonials'));
    }

    public function list(Request $request)
    {
        $query = Concert::query();

        // Ambil status dari request, jika tidak ada default ke upcoming
        $status = $request->has('status') ? $request->status : 'upcoming';

        switch ($status) {
            case 'upcoming':
                $query->where('datetime', '>=', now());
                break;
            case 'past':
                $query->where('datetime', '<', now());
                break;
            case 'free':
                $query->where('price', 0);
                break;
            case 'discount':
                $query->whereHas('discount');
                break;
            case '':
            case 'all':
                // Tidak ada filter status
                break;
        }

        if ($request->filled('genre')) {
            $query->where('genre', $request->genre);
        }

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        switch ($request->sort) {
            case 'date':
                $query->orderBy('datetime', 'asc');
                break;
            case 'price_low':
                $query->orderBy('price', 'asc');
                break;
            case 'price_high':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->orderBy('datetime', 'asc');
                break;
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        // FIX di sini
        $concerts = $query->with('discount')->paginate(9);

        return view('layouts.shop', compact('concerts'));
    }
}
