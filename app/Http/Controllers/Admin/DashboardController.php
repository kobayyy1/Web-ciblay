<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use App\Models\Berita; // <--- 1. PASTIKAN MODEL BERITA LU DI-IMPORT DI SINI
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPenelitian = Penelitian::count();
        $totalBerita = Berita::count(); 

        $latestPenelitians = Penelitian::latest()->take(5)->get();
        $totalUnduhan = 0;
        $totalPengabdian = 0;

        return view('admin.dashboard', compact(
            'totalPenelitian',
            'totalBerita',
            'totalUnduhan',
            'totalPengabdian',
            'latestPenelitians'
        ));
    }
}
