<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all();
        return view('materials.index', compact('materials'));
    }

    public function create()
    {
        return view('materials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'required|file|mimes:pdf,doc,docx,ppt,pptx',
        ]);

        $filePath = $request->file('file')->store('materials', 'public');

        Material::create([
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $filePath,
        ]);

        return redirect()->route('materials.index');
    }

    public function show($id)
    {
        $material = Material::findOrFail($id);
        return view('materials.show', compact('material'));
    }

    public function edit($id)
    {
        $material = Material::findOrFail($id);
        return view('materials.edit', compact('material'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx',
        ]);

        $material = Material::findOrFail($id);

        if ($request->hasFile('file')) {
            Storage::disk('public')->delete($material->file_path);
            $filePath = $request->file('file')->store('materials', 'public');
            $material->file_path = $filePath;
        }

        $material->update([
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $material->file_path,
        ]);

        return redirect()->route('materials.index');
    }

    public function destroy($id)
    {
        $material = Material::findOrFail($id);
        Storage::disk('public')->delete($material->file_path);
        $material->delete();
        return redirect()->route('materials.index');
    }
}
