<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Penelitian;
use App\Models\Media;
use App\Models\Information;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->toDateString();

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

        $penelitians = Penelitian::latest()->get();
        $medias = Media::latest()->get(); 
        $informations = Information::latest()->get();

        return view('home', compact('beritas', 'penelitians', 'medias', 'informations'));
    }
    public function mediaDetail($id)
    {
        $media = \App\Models\Media::findOrFail($id);

        return view('media.detail', compact('media'));
    }
}
