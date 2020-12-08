<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('employee.index');
    }

    public function create(){
        return view('employee.form');
    }

    public function store(){
        
    }
}
