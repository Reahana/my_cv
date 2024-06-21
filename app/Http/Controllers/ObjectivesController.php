<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use Illuminate\Http\Request;

class ObjectivesController extends Controller
{
    private $objectives;
    public  function  index(){
        return view('admin.objectives.add');
    }
    public function create(Request $request)
    {
        $this->objectives = Objective::newObjective($request);
        return redirect('/objectives/add')->with('message', 'Objectives info create successfully.');
    }
}
