<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Menampilkan daftar berita
     */
    public function index()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Menampilkan form tambah berita
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Menyimpan berita baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:255|unique:beritas,title',
            'content'    => 'required',
            'image'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'start_date' => 'nullable|date',
            'end_date'   => 'nullable|date|after_or_equal:start_date',
        ], [
            'title.unique'            => 'Judul berita ini sudah ada, Ganti judul lain biar slug-nya gak bentrok.',
            'end_date.after_or_equal' => 'Tanggal selesai aktif tidak boleh mendahului tanggal mulai,  ',
        ]);

        $data = $request->only('title', 'content', 'start_date', 'end_date');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('berita', 'public');
        }

        Berita::create($data);

        return redirect()->route('admin.berita.index')->with('status', 'Berita dengan masa aktif berhasil diterbitkan!');
    }

    /**
     * Menampilkan form edit berita
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita')); // Nanti tinggal bikin file edit.blade.php
    }

    /**
     * Memproses update data berita
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'title'      => 'required|string|max:255',
            'content'    => 'required',
            'image'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'start_date' => 'nullable|date',
            'end_date'   => 'nullable|date|after_or_equal:start_date',
        ]);

        $data = $request->only('title', 'content', 'start_date', 'end_date');

        if ($request->hasFile('image')) {
            if ($berita->image) {
                Storage::disk('public')->delete($berita->image);
            }
            $data['image'] = $request->file('image')->store('berita', 'public');
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('status', 'Berita berhasil diperbarui,  ');
    }

    /**
     * Memproses hapus data berita (INI BIANG KEROKNYA TADI)
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->image) {
            Storage::disk('public')->delete($berita->image);
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')->with('status', 'Berita berhasil dihapus permanent,  ');
    }
}
