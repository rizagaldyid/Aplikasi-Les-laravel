<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Student;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::with('lesson', 'student')->get();
        return view('attendance.index', compact('attendances'));
    }

    public function create()
    {
        $lessons = Lesson::all();
        $students = Student::all();
        return view('attendance.create', compact('lessons', 'students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lesson_id' => 'required|exists:lessons,id',
            'student_id' => 'required|exists:students,id',
            'status' => 'required|string|max:20',
        ]);

        Attendance::create($request->all());

        return redirect()->route('attendances.index')
                         ->with('success', 'Attendance record created successfully.');
    }

    public function show(Attendance $attendance)
    {
        $attendance->load('lesson', 'student');
        return view('attendance.show', compact('attendance'));
    }

    public function edit(Attendance $attendance)
    {
        $lessons = Lesson::all();
        $students = Student::all();
        return view('attendance.edit', compact('attendance', 'lessons', 'students'));
    }

    public function update(Request $request, Attendance $attendance)
    {
        $request->validate([
            'lesson_id' => 'required|exists:lessons,id',
            'student_id' => 'required|exists:students,id',
            'status' => 'required|string|max:20',
        ]);

        $attendance->update($request->all());

        return redirect()->route('attendances.index')
                         ->with('success', 'Attendance record updated successfully.');
    }

    public function destroy(Attendance $attendance)
    {
        $attendance->delete();

        return redirect()->route('attendances.index')
                         ->with('success', 'Attendance record deleted successfully.');
    }
}
