<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function basePath() {
        $employees = Employee::all();

        return view('employee.home', compact('employees'));
    }

    public function addEmployee() {
        return view('employee.add-employee');
    }
//This is the function for create or insert data to database
    public function newEmployee(Request $request) {

        Employee::create($request->all());

        return redirect()->back()->with('message','Employee information inserted successfully');
    }

    public function editEmployee($id) {
        $employee = Employee::find($id);
        return view('employee.edit-employee', compact('employee'));
    }
    public function updateEmployee(Request $request) {
        $employee = Employee::find($request->id);

        $employee->name = $request->name;
        $employee->mobile= $request->mobile;
        $employee->email= $request->email;
        $employee->dept= $request->dept;
        $employee->religion= $request->religion;
        $employee->status= $request->status;
        $employee->district= $request->district;


        $employee->save();

        return redirect()->back()->with('message', 'Employee Information Updated Successfully');
    }

    public function deleteEmployee($id) {
        $employee = Employee::find($id);

        $employee->delete();

        return redirect()->back()->with('message', 'Employee Information Deleted Successfully');
    }

}
