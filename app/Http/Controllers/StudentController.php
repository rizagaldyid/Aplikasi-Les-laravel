<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('user')->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'phone_number' => 'required|string|max:20',
            'birthdate' => 'required|date',
        ]);

        $student = new Student($request->all());
        $student->user_id = Auth::id(); // Assuming the user is logged in
        $student->save();

        return redirect()->route('students.index')->with('status', 'Student created successfully');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students,email,'.$student->id,
            'phone_number' => 'required|string|max:20',
            'birthdate' => 'required|date',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('status', 'Student updated successfully');
    }

    public function destroy(Student $student)
    {
        try{
            
            $student->delete();

            Alert::error('Success', 'Barang has been deleted !');
            return redirect()->route('students.index');
        }catch(Exception $ex){
            Alert::warning('Error', 'Cant deleted, Barang already used !');
            return redirect()->route('students.index');
        }
        // return redirect()->route('students.index')->with('status', 'Student deleted successfully');
    }

}
