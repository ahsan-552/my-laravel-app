<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class StudentController extends Controller
{
    // 1. Saare students ki list dikhane ke liye (READ)
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // 2. Naya student add karne ka form dikhane ke liye
    public function create()
    {
        return view('students.create');
    }

    // 3. Form ka data database mein save karne ke liye (STORE)
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required|numeric|digits:11' // Alphabet block aur length check
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    // 4. Edit form dikhane ke liye (UPDATE Form)
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // 5. Data update karne ke liye (UPDATE Logic)
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'required|numeric|digits:11' // Yahan bhi alphabet block
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    // 6. Data delete karne ke liye (DELETE)
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}