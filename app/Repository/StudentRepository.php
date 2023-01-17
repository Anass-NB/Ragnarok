<?php

namespace App\Repository;
use App\Models\Student;


class StudentRepository implements StudentInterface{

  public function getAllStudents(){
    return Student::all();
  }

}





?>