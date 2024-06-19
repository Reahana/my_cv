<?php

namespace App\Http\Controllers;

use App\Models\AcademicQualification;
use Illuminate\Http\Request;

class AcademicQualificationController extends Controller
{
    private $academic;
    public  function  index(){
        return view('admin.academic qualification.add');
    }
    public function create(Request $request)
    {
        $this->academic = AcademicQualification::newAcademic($request);
        return redirect('/academic-qualification/add')->with('message', 'Academic Qualification info create successfully.');
    }
}
