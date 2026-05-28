<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:255',
            'content'    => 'required',
            'image'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'start_date' => 'nullable|date',
            'end_date'   => 'nullable|date|after_or_equal:start_date', // Logika: Tanggal selesai gak boleh sebelum tanggal mulai
        ], [
            'end_date.after_or_equal' => 'Tanggal selesai aktif tidak boleh mendahului tanggal mulai, Jon!',
        ]);

        // Ambil data termasuk tanggal mulai dan selesai
        $data = $request->only('title', 'content', 'start_date', 'end_date');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('berita', 'public');
        }

        Berita::create($data);

        return redirect()->route('admin.berita.index')->with('status', 'Berita dengan masa aktif berhasil diterbitkan!');
    }
}
