<?php

namespace App\Http\Controllers;

use App\Models\Awards;
use Illuminate\Http\Request;

class AwardsController extends Controller
{
    private $award;
    public  function  index(){
        return view('admin.awards.add');
    }
    public function create(Request $request)
    {
        $this->award = Awards::newAwards($request);
        return redirect('/awards/add')->with('message', 'Awards info create successfully.');
    }
}
