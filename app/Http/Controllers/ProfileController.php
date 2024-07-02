<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'birthdate' => 'required|date',
        ]);

        $user = Auth::user();
        $user->update($request->only('name', 'email'));

        if ($user->student) {
            $user->student->update($request->only('first_name', 'last_name', 'phone_number', 'birthdate'));
        } else {
            // Handle if the user doesn't have an associated student record
            Student::create([
                'user_id' => $user->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone_number' => $request->phone_number,
                'birthdate' => $request->birthdate,
            ]);
        }

        return redirect()->route('profile.show')->with('status', 'Profile updated successfully');
    }
}
