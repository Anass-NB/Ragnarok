<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{



    public function index()
    {
        try {
            return response()->json([
                "students" => Student::all(),
            ]);
        } catch (\Exception $ex) {
            return response()->json([
                "Message" => $ex->getMessage(),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $valid = $request->validate([
                "full_name" => "required",
                "email" => "required | email",
                "grade" => "required",
                "note" => "required",
                "succeeded" => "required",
            ]);
            $user = Student::create([
                "full_name" => $valid["full_name"],
                "email" => $valid["email"],
                "grade" => $valid["grade"],
                "note" => $valid["note"],
                "succeeded" => $valid["succeeded"],
            ]);
            return response()->json([
                "message" => "Student inserted successfully",
                "user" => $user
            ]);
            $user->save();
        } catch (\Exception $ex) {
            return response()->json([
                "message" => $ex->getMessage()
            ]);
        }
        // $token = $user->createToken("StudentsToken")->plainTextToken;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
