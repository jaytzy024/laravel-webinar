<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student_list()
    {
        $students = Students::all();
        return view('index', compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = new Students();
        $student->student_id = $request->input('student_id');
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->course = $request->input('course');
        $student->save();
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $student = Students::findOrFail($id);
        return view('edit', compact('student'));
    }
    public function update(Request $request, $id)
    {
        $student = Students::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('index')->with('success', 'Student updated successfully.');
    }

    // public function update(Request $request, $id)
    // {
    //     $student = Students::findOrFail($id);
    //     $student->student_id = $request->input('student_id');
    //     $student->first_name = $request->input('first_name');
    //     $student->last_name = $request->input('last_name');
    //     $student->course = $request->input('course');
    //     $student->save();
    //     return redirect()->route('index');
    // }

    public function destroy($id)
    {
        $student = Students::findOrFail($id);
        $student->delete();
        return redirect()->route('index');
    }
}
