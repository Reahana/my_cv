<?php

namespace App\Http\Controllers;

use App\Models\TrainingSummary;
use Illuminate\Http\Request;

class TrainingSummaryController extends Controller
{
    private $training;
    public  function  index(){
        return view('admin.training-summary.add');
    }
    public function create(Request $request)
    {
        $this->training = TrainingSummary::newTraining($request);
        return redirect('/training-summary/add')->with('message', 'Training Summary info create successfully.');
    }
}
