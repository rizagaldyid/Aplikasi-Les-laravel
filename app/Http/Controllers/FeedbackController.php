<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::with('lesson')->get();
        return view('feedback.index', compact('feedbacks'));
    }
    
    public function create()
    {
        $lessons = Lesson::all();
        return view('feedback.create', compact('lessons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lesson_id' => 'required|exists:lessons,id',
            'given_by' => 'required|string|max:20',
            'comments' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Feedback::create($request->all());

        return redirect()->route('feedbacks.index')
                         ->with('success', 'Feedback created successfully.');
    }

    public function show(Feedback $feedback)
    {
        $feedback->load('lesson');
        return view('feedback.show', compact('feedback'));
    }

    public function edit(Feedback $feedback)
    {
        $lessons = Lesson::all();
        return view('feedback.edit', compact('feedback', 'lessons'));
    }

    public function update(Request $request, Feedback $feedback)
    {
        $request->validate([
            'lesson_id' => 'required|exists:lessons,id',
            'given_by' => 'required|string|max:20',
            'comments' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $feedback->update($request->all());

        return redirect()->route('feedbacks.index')
                         ->with('success', 'Feedback updated successfully.');
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return redirect()->route('feedbacks.index')
                         ->with('success', 'Feedback deleted successfully.');
    }
}
