<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class TestController extends Controller
{
    public function home(){

        $employees = Employee::all();

        return view('pages.home', compact(
            'employees'
        ));
    }

    public function show($id){

        $employee = Employee::findOrFail($id);
        return view('pages.show', compact(
            'employee'
        ));

    }

    public function create(){

        return view('pages.create');
    }

    public function store(Request $request){

        $validData = $request -> validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'role' => 'required',
            'ral' => 'required',
        ]);

        $employee = Employee::create($validData);
        return redirect() -> route('show', $employee -> id);
    }

}
