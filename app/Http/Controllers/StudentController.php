<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use App\Models\Student;
use App\Repository\StudentInterface;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
	// function __construct()
	// {
	//     $this->middleware('permission:students', ['only' => ['index', 'index']]);
	//     $this->middleware('permission:add-student', ['only' => ['create', 'store']]);
	//     $this->middleware('permission:role-edit', ['only' => ['edit', 'update']]);
	//     $this->middleware('permission:role-delete', ['only' => ['destroy']]);
	// }
	protected $student;
	function __construct(StudentInterface $student)
	{
		$this->student = $student;
	}




	public function index()
	{
		return view("all-students", [
			"all_students" => $this->student->getAllStudents(),
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
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


	public function getPdf()
	{
		$students = Student::all();
		$pdf = Pdf::loadView('pdf.students', compact("students"));
		return $pdf->download('students.pdf');
	}
	public function getExcel()
	{

      return Excel::download(new StudentExport, 'students.xlsx');
	}
}
