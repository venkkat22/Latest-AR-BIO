<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class ExtraController extends Controller
{
    //
    public function index()
    {
        $subject = Subject::all();
        return view ('admin.dashboard',compact('subject'));
    }
}
