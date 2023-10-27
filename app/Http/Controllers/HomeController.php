<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function studentHome()
    {
    $student = Student::where('student_id', auth()->user()->id)->first();    
    return view('studentHome')->with(['student' => $student]);
    }
    public function teacherHome()
    {

    $groups = Group::where('teacher_id', auth()->user()->id)->get();  
    return view('teacherHome')->with(['groups' => $groups]);
    }
}
