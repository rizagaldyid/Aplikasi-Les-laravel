<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::with(['student', 'teacher'])->get();
        return view('lessons.index', compact('lessons'));
    }

    public function create()
    {
        $students = Student::all();
        $teachers = Teacher::all();
        
        return view('lessons.create', compact('students', 'teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'teacher_id' => 'required|exists:teachers,id',
            'date' => 'required|date',
            'time' => 'required',
            'duration' => 'required',
            'location' => 'required|max:100',
        ]);

        Lesson::create($request->all());
        Alert::success('Create successful!', 'Your create has been completed successfully.');
        return redirect()->route('lessons.index')
                         ->with('success', 'Lesson created successfully.');
    }

    public function show($id)
    {
        $lesson = Lesson::with(['student', 'teacher'])->findOrFail($id);
        return view('lessons.show', compact('lesson'));
    }

    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);
        $students = Student::all();
        $teachers = Teacher::all();
        return view('lessons.edit', compact('lesson', 'students', 'teachers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'teacher_id' => 'required|exists:teachers,id',
            'date' => 'required|date',
            'time' => 'required',
            'duration' => 'required|integer',
            'location' => 'required|string|max:100',
        ]);

        $lesson = Lesson::findOrFail($id);
        $lesson->update($request->all());

        return redirect()->route('lessons.show', $id)
                         ->with('success', 'Lesson updated successfully.');
    }

    public function destroy($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();
        Alert::success('Delete successful!', 'Your Delete has been completed successfully.');
        return redirect()->route('lessons.index')
                         ->with('success', 'Lesson deleted successfully.');
    }
}
