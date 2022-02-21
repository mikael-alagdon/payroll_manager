<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class EmployeeController extends Controller
{
    
    public function store(Request $request){
        $data = $this->validate($request, [
            "firstname" => "required",
            "middlename" => "nullable",
            "lastname" => "required"
        ]);

        Employee::create($data);
        return redirect()->route("employee-create")->with("message", "Employee created.");
    }

    public function create(){
        return view("employee.create");
    }

}
