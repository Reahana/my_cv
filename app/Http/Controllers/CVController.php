<?php

namespace App\Http\Controllers;

use App\Models\AcademicQualification;
use App\Models\EmploymentHistory;
use App\Models\TrainingSummary;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function  index(){

        return view('front.master',[
            'employments' => EmploymentHistory::orderBy('id')->get(),
            'academics' => AcademicQualification::orderBy('id', 'DESC')->get(),
            'trainings' => TrainingSummary::orderBy('id', 'DESC')->get(),
        ]);
    }
}
