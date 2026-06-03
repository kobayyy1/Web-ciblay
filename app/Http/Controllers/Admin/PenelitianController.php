<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenelitianController extends Controller
{
    public function index()
    {
        $penelitians = Penelitian::latest()->paginate(10);
        return view('admin.penelitian.index', compact('penelitians'));
    }

    public function create()
    {
        return view('admin.penelitian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'nama_peneliti' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', 
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi_singkat' => 'required|string|max:500',
            'deskripsi_lengkap' => 'required|string',
            'file_pdf' => 'nullable|mimes:pdf|max:10240',
            'tanggal_penelitian' => 'required|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('penelitian/avatar', 'public');
        }

        if ($request->hasFile('images')) {
            $uploadedImages = [];
            foreach ($request->file('images') as $file) {
                $uploadedImages[] = $file->store('penelitian/images', 'public');
            }
            $data['image'] = $uploadedImages;
        }

        if ($request->hasFile('file_pdf')) {
            $data['file_pdf'] = $request->file('file_pdf')->store('penelitian/docs', 'public');
        }

        Penelitian::create($data);

        return redirect()->route('admin.penelitian.index')->with('success', 'Data Penelitian Berhasil Ditambahkan, Dy!');
    }

    public function edit($id)
    {
        $penelitian = Penelitian::findOrFail($id);
        return view('admin.penelitian.edit', compact('penelitian'));
    }

    public function update(Request $request, $id)
    {
        $penelitian = Penelitian::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'nama_peneliti' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi_singkat' => 'required|string|max:500',
            'deskripsi_lengkap' => 'required|string',
            'file_pdf' => 'nullable|mimes:pdf|max:10240',
            'tanggal_penelitian' => 'required|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('avatar')) {
            if ($penelitian->avatar) {
                Storage::disk('public')->delete($penelitian->avatar);
            }
            $data['avatar'] = $request->file('avatar')->store('penelitian/avatar', 'public');
        }

        if ($request->hasFile('images')) {
            if (!empty($penelitian->image) && is_array($penelitian->image)) {
                foreach ($penelitian->image as $oldImg) {
                    Storage::disk('public')->delete($oldImg);
                }
            }
            $uploadedImages = [];
            foreach ($request->file('images') as $file) {
                $uploadedImages[] = $file->store('penelitian/images', 'public');
            }
            $data['image'] = $uploadedImages;
        }

        if ($request->hasFile('file_pdf')) {
            if ($penelitian->file_pdf) {
                Storage::disk('public')->delete($penelitian->file_pdf);
            }
            $data['file_pdf'] = $request->file('file_pdf')->store('penelitian/docs', 'public');
        }

        $penelitian->update($data);

        return redirect()->route('admin.penelitian.index')->with('success', 'Data Penelitian Berhasil Diperbarui, Dy!');
    }

    public function destroy($id)
    {
        $penelitian = Penelitian::findOrFail($id);

        if ($penelitian->avatar) {
            Storage::disk('public')->delete($penelitian->avatar);
        }

        if (!empty($penelitian->image) && is_array($penelitian->image)) {
            foreach ($penelitian->image as $imgFile) {
                Storage::disk('public')->delete($imgFile);
            }
        }

        if ($penelitian->file_pdf) {
            Storage::disk('public')->delete($penelitian->file_pdf);
        }

        $penelitian->delete();

        return redirect()->route('admin.penelitian.index')->with('success', 'Data Penelitian Berhapus Permanen, Dy!');
    }
}
