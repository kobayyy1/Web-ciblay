<?php

namespace App\Http\Controllers;

use App\Models\Penelitian;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
  public function index()
    {
        $penelitians = Penelitian::latest()->get();
        return view('research.index', compact('penelitians'));
    }

    public function detail($id)
    {
        $penelitian = Penelitian::findOrFail($id);
        return view('research.detail-penelitian', compact('penelitian'));
    }
}
