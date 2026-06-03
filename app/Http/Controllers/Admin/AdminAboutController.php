<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminAboutController extends Controller
{
    public function index()
    {
        $abouts = About::latest()->paginate(10);
        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'headline' => 'required|string|max:255',
            'description' => 'required|string',
            'vision_mission' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('about', 'public');
        }

        About::create([
            'name' => $request->name,
            'title' => $request->title,
            'headline' => $request->headline,
            'description' => $request->description,
            'vision_mission' => $request->vision_mission,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.about.index')->with('success', 'Data About Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'headline' => 'required|string|max:255',
            'description' => 'required|string',
            'vision_mission' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $about->image;
        if ($request->hasFile('image')) {
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            $imagePath = $request->file('image')->store('about', 'public');
        }

        $about->update([
            'name' => $request->name,
            'title' => $request->title,
            'headline' => $request->headline,
            'description' => $request->description,
            'vision_mission' => $request->vision_mission,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.about.index')->with('success', 'Data About Berhasil Diperbarui!');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }
        $about->delete();

        return redirect()->route('admin.about.index')->with('success', 'Data About Berhasil Dihapus!');
    }
}
