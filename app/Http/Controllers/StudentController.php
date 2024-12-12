<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        return view('createStudent');
    }
    public function store(Request $request)
    {
        $input = $request->all();
 
        $request->validate([
            'title' => 'required',
            'name' => 'required|max:255',
            'bday' => 'required|date',
            'age' => 'required|numeric',
            'gender' => 'required',
            'phone' => 'required|min:10',
            'address' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:255',
            't&c' => 'required',
        ]);
 
        $input['password'] = bcrypt($input['password']);
        Student::create($input);
 
        return back()->with('success','Successfully registered a new student!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
