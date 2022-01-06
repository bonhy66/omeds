<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    public function list(){
        $employees=Employee::all();
        //dd($employees);
        return view('admin.employee.employee',compact('employees'));
        
    }

    public function form(){
        return view('admin.employee.employee-form');
    }

    public function postEmployee(Request $request){
        //dd($request->all());
        Employee::create([
            //field name from DB || field name from form 
            'name'=>$request->name,
            'nid'=>$request->nid,
            'birth_date'=>$request->birth_date,
            'blood_group'=>$request->blood_group,
            'address'=>$request->address,
            'phone_number'=>$request->phone,
            'joining_date'=>$request->joining_date,
            'department'=>$request->department,
            'designation'=>$request->designation,
            'salery'=>$request->salery
        ]);
        return redirect()->route('admin.employee.list');
     }

     public function deleteEmployee($id){
        $employee = Employee::find($id);

        if ($employee){
            $employee->delete();
            return redirect()->back();
        }
    }

}
