<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Show the Home Page
     */
    public function home(): View
    {
        return view('home');
    }

    /**
     * Display a listing of all students.
     */
    public function index(): View
    {
        $students = Student::all();
        return view('students.students', compact('students'));
        // 👆 Correct view path: views/students/students.blade.php
    }

    /**
     * Show details of a single student.
     */
    public function show($id): View
    {
        $student = Student::findOrFail($id);
        return view('students.student', compact('student'));
        // 👆 Correct view path: views/students/student.blade.php
    }

    /**
     * Redirect user to home page
     */
    public function redirectToHome()
    {
        return redirect()->route('homepage');
    }

    /**
     * Show the form for creating a new student.
     */
    public function create(): View
    {
        return view('students.create');
        // 👆 This should open resources/views/students/create.blade.php
    }

    /**
     * Store a newly created student in database.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string|max:15',
            'dob' => 'required|date',
            'color' => 'required|string|max:10',
        ]);

        Student::create($validatedData);

        return redirect()
            ->route('students.record')
            ->with('success', 'Student added successfully!');
    }
}
