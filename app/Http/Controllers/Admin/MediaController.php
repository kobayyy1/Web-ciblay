<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        $medias = Media::latest()->paginate(10);

        return view('admin.media.index', compact('medias'));
    }

    public function create()
    {
        return view('admin.media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string|max:500',
            'deskripsi_lengkap' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:51200',
        ]);

        Media::create([
            'title' => $request->title,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_lengkap' => $request->deskripsi_lengkap,
            'image' => $request->hasFile('image') ? $request->file('image')->store('media/images', 'public') : null,
            'video' => $request->hasFile('video') ? $request->file('video')->store('media/videos', 'public') : null,
        ]);

        return redirect()->route('admin.media.index')->with('success', 'Data Media Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $media = Media::findOrFail($id);

        return view('admin.media.edit', compact('media'));
    }

    public function update(Request $request, $id)
    {
        $media = Media::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string|max:500',
            'deskripsi_lengkap' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:51200',
        ]);

        if ($request->hasFile('image')) {
            if ($media->image) {
                Storage::disk('public')->delete($media->image);
            }
            $imagePath = $request->file('image')->store('media/images', 'public');
        } else {
            $imagePath = $media->image;
        }

        if ($request->hasFile('video')) {
            if ($media->video) {
                Storage::disk('public')->delete($media->video);
            }
            $videoPath = $request->file('video')->store('media/videos', 'public');
        } else {
            $videoPath = $media->video;
        }

        $media->update([
            'title' => $request->title,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_lengkap' => $request->deskripsi_lengkap,
            'image' => $imagePath,
            'video' => $videoPath,
        ]);

        return redirect()->route('admin.media.index')->with('success', 'Data Media Berhasil Diperbarui!');
    }

    public function destroy($id)
    {
        $media = Media::findOrFail($id);

        if ($media->image) {
            Storage::disk('public')->delete($media->image);
        }

        if ($media->video) {
            Storage::disk('public')->delete($media->video);
        }

        $media->delete();

        return redirect()->route('admin.media.index')->with('success', 'Data Media Berhasil Dihapus!');
    }

    public function detail($id)
    {
        $media = Media::findOrFail($id);

        return view('media.detail', compact('media'));
    }
}
