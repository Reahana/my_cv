<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    private $reference;
    public function index()
    {
        return view('admin.reference.add');
    }


    public function create(Request $request)
    {
        $this->reference = Reference::newReference($request);
        return redirect('/reference/add')->with('message', 'Reference info create successfully.');
    }


}
