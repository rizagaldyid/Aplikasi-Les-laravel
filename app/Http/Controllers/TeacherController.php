<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Menampilkan halaman untuk membuat guru baru.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Menyimpan guru baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|unique:teachers,email',
            'phone_number' => 'required|string|max:20',
            'specialty' => 'required|string|max:20',
        ]);

        Teacher::create($request->all());

        return redirect()->route('teachers.index')
                         ->with('success', 'Teacher created successfully.');
    }

    /**
     * Menampilkan detail guru berdasarkan ID.
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Menampilkan halaman untuk mengedit informasi guru.
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Mengupdate informasi guru berdasarkan ID.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|unique:teachers,email,'.$id,
            'phone_number' => 'required|string|max:20',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());

        return redirect()->route('teachers.show', $id)
                         ->with('success', 'Teacher updated successfully.');
    }

    /**
     * Menghapus guru dari database berdasarkan ID.
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('teachers.index')
                         ->with('success', 'Teacher deleted successfully.');
    }
}
