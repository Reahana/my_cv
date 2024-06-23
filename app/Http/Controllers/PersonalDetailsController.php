<?php

namespace App\Http\Controllers;

use App\Models\PersonalDetails;
use Illuminate\Http\Request;

class PersonalDetailsController extends Controller
{
    private $personal;
    public function index()
    {
        return view('admin.personal-details.add');
    }

    public function create(Request $request)
    {
        $this->personal = PersonalDetails::newVolunteer($request);
        return redirect('/personal/add')->with('message', 'Personal Details info create successfully.');
    }
}
