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

        // Tambahkan: konser terdekat (berdasarkan waktu konser)
        $upcomingConcerts = Concert::where('datetime', '>=', now())
            ->orderBy('datetime', 'asc')
            ->take(6)
            ->get();

        $testimonials = Testimonial::latest()->take(10)->get();

        return view('home', compact('concerts', 'genres', 'upcomingConcerts', 'testimonials'));
    }
}
