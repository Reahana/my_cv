<?php

namespace App\Http\Controllers;

use App\Models\VolunteerExperiences;
use Illuminate\Http\Request;

class VolunteerExperiencesController extends Controller
{
    private $volunteer;
    public  function  index(){
        return view('admin.volunteer-experiences.add');
    }
    public function create(Request $request)
    {
        $this->volunteer = VolunteerExperiences::newVolunteer($request);
        return redirect('/volunteer-experiences/add')->with('message', 'Volunteer Experiences info create successfully.');
    }
}
