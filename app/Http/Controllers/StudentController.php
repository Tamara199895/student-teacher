<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\addGroupRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function groupForm($student_id)
    {
        $student = Student::with('group')->where("student_id", $student_id)->first();
        $groups = Group::all();
        return view("addGroupForm")->with(['student' => $student , 'groups' => $groups]);
    }

    public function addGroup(addGroupRequest $request){
        $validated = $request->validated();
        Student::where('student_id', $request->student_id)
        ->update(
            [
                'group_id' => $request->group_id,
            ]
        );
        
        $query=DB::table('ratebook');
        for ($class = 1; $class < 13; $class++) {
            $query->insert([
                  'group_id' => $request->group_id,
                  'student_id' => $request->student_id,
                  'lesson_no' => $class,
            ]);      
        }

        $student = Student::where('student_id',$request->student_id)->first();    
        return view('studentHome')->with(['student' => $student]);

    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        dd('a');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
