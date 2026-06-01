<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan Halaman Utama (Frontpage) Website
     */
    public function index()
    {
        $today = \Carbon\Carbon::today()->toDateString();

        $beritas = Berita::where(function ($query) use ($today) {
            $query->whereNull('start_date')
                ->orWhere('start_date', '<=', $today);
        })
            ->where(function ($query) use ($today) {
                $query->whereNull('end_date')
                    ->orWhere('end_date', '>=', $today);
            })
            ->latest()
            ->take(5)
            ->get()
            ->map(function ($item) {
                $item->image_url = $item->image ? asset('storage/' . $item->image) : asset('images/berita1.png');
                return $item;
            });

        return view('home', compact('beritas'));
    }
}
