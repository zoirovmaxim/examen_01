<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view("employees.index", ["employees"=>$employees]);
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        return response()->json($employee);
    }

    public function search($query)
    {
        $employees = Employee::where('first_name', 'like', "%$query%")
                             ->orWhere('last_name', 'like', "%$query%")
                             ->get();
        return response()->json($employees);
    }
}

