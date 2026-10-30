<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    function add(Request $data){
        $x = Employee::Create([
            "name"=> $data->name,
            "email"=> $data->email,
            "phone"=> $data->phone,
        ]);
        if($x){
            return redirect('/add-employee');
        } else{
            return "database not Added";
        }
    }
    function show(){
        $x = Employee::all();
        return view('show-employees',['emp'=>$x]);
    }
}
