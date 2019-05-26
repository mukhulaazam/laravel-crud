<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function basePath() {
        return view('employee.home');
    }

    public function addEmployee() {
        return view('employee.add-employee');
    }
//This is the function for create or insert data to database
    public function newEmployee(Request $request) {

        Employee::create($request->all());

        return redirect()->back()->with('message','Employee information inserted successfully');
    }
}
