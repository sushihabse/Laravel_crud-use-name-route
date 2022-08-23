<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index()
    {
        $students = student::get();
        return view('students.index',compact('students'));
    }

    
    public function create()
    {
        return view('students.create');
    }

   
    public function store(Request $request)
    {
        student::create($request->all());
        return redirect()->route('student.index');
    }

    public function show($id)
    {
        $students = student::find($id);
        return view('students.show',compact('students'));
    }
    public function edit(student $student)
    {
        return view('students.edit',compact('student'));
    }

 
    public function update(Request $request, student $student)
    {
         $student->update($request->all());
         return redirect()->route('student.index');
    }

   
    public function destroy(student $student)
    {
        $student->delete();
        return back();
    }
}
