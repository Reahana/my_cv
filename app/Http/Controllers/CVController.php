<?php

namespace App\Http\Controllers;

use App\Models\AcademicQualification;
use App\Models\EmploymentHistory;
use App\Models\Language;
use App\Models\Objective;
use App\Models\TrainingSummary;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function  index(){

        return view('front.master',[
            'employments' => EmploymentHistory::orderBy('id')->get(),
            'academics' => AcademicQualification::orderBy('id', 'DESC')->get(),
            'trainings' => TrainingSummary::orderBy('id', 'DESC')->get(),
            'languages'=> Language::orderBy('id')->get(),
            'objectives'=> Objective::orderBy('id')->get(),
        ]);
    }
}
