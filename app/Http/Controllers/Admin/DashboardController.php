<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use App\Models\Berita;
use App\Models\Media;
use App\Models\Information; 

class DashboardController extends Controller
{
    public function index()
    {
        $totalPenelitian = Penelitian::count();
        $totalBerita = Berita::count();
        $totalMedia = Media::count();
        $totalInformasi = Information::count();

        $latestPenelitians = Penelitian::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalPenelitian',
            'totalBerita',
            'totalMedia',
            'totalInformasi',
            'latestPenelitians'
        ));
    }
}
