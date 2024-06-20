<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    private $language;
    public  function  index(){
        return view('admin.languages.add');
    }
    public function create(Request $request)
    {
        $this->language = Language::newLanguage($request);
        return redirect('/languages/add')->with('message', 'Language info create successfully.');
    }
}
