<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformationController extends Controller
{
    public function index()
    {
        $informations = Information::latest()->paginate(10);
        return view('admin.information.index', compact('informations'));
    }

    public function create()
    {
        return view('admin.information.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string|max:500',
            'deskripsi_lengkap' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('information', 'public');
        }

        Information::create($data);

        return redirect()->route('admin.information.index')->with('success', 'Data Informasi Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $information = Information::findOrFail($id);
        return view('admin.information.edit', compact('information'));
    }

    public function update(Request $request, $id)
    {
        $information = Information::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string|max:500',
            'deskripsi_lengkap' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($information->image) {
                Storage::disk('public')->delete($information->image);
            }
            $data['image'] = $request->file('image')->store('information', 'public');
        }

        $information->update($data);

        return redirect()->route('admin.information.index')->with('success', 'Data Informasi Berhasil Diperbarui!');
    }

    public function destroy($id)
    {
        $information = Information::findOrFail($id);

        if ($information->image) {
            Storage::disk('public')->delete($information->image);
        }

        $information->delete();

        return redirect()->route('admin.information.index')->with('success', 'Data Informasi Berhasil Dihapus!');
    }
}
