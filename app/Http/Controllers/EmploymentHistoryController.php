<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmploymentHistoryController extends Controller
{
    public  function  index(){
        return view('admin.employment-history.add');
    }
}
