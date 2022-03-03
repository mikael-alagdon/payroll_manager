<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class EmployeeController extends Controller
{
    
    public function store(Request $request){
        $data = $this->validate($request, [
            "emp_no" => "required",
            "first_name" => "required",
            "middle_name" => "nullable",
            "last_name" => "required"
        ]);

        Employee::create($data);
        return redirect()->route("employee-create")->with("message", "Employee created.");
    }

    public function create(){
        return view("employee.create");
    }

    public function index(){
        $employees = Employee::all();
        return view("employee.index", compact("employees"));

    }

}
