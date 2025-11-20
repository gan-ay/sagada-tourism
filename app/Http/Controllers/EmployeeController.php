<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'position' => 'required',
        'email' => 'required|email|unique:employees,email'
    ]);

    Employee::create($request->all());

    return redirect()->route('employees.index')->with('success', 'Employee added!');
}


    public function update(Request $request, Employee $employee)
{
    $request->validate([
        'name' => 'required',
        'position' => 'required',
        'email' => 'required|email|unique:employees,email,' . $employee->id
    ]);

    $employee->update($request->all());

    return redirect()->route('employees.index')->with('success', 'Employee updated!');
}


    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted!');
    }
}
