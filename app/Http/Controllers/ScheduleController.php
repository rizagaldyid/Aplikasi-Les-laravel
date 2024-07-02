<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with('teacher')->get();
        return view('schedules.index', compact('schedules'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        return view('schedules.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'day' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        Schedule::create($request->all());

        return redirect()->route('schedules.index')
                         ->with('success', 'Schedule created successfully.');
    }

    public function show(Schedule $schedule)
    {
        $schedule->load('teacher');
        return view('schedules.show', compact('schedule'));
    }

    public function edit(Schedule $schedule)
    {
        $teachers = Teacher::all();
        return view('schedules.edit', compact('schedule', 'teachers'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'day' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        $schedule->update($request->all());

        return redirect()->route('schedules.index')
                         ->with('success', 'Schedule updated successfully.');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('schedules.index')
                         ->with('success', 'Schedule deleted successfully.');
    }
}
