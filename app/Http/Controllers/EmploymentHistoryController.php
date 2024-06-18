<?php

namespace App\Http\Controllers;

use App\Models\EmploymentHistory;
use Illuminate\Http\Request;

class EmploymentHistoryController extends Controller
{
    private $employment;
    public  function  index(){
        return view('admin.employment-history.add');
    }
    public function create(Request $request)
    {
        $this->employment = EmploymentHistory::newEmployment($request);
        return redirect('/employment-history/add')->with('message', 'Employment History info create successfully.');
    }

}
