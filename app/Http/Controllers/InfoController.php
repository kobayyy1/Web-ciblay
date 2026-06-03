<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Information;
use App\Models\Penelitian;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InfoController extends Controller
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
            ->get();
        $informations = Information::latest()->get();
        $penelitians = Penelitian::latest()->get();

        return view('information.index', compact('beritas', 'informations', 'penelitians'));
    }
}
