<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{

	public function getAllStudents() {
      // logic to get all students goes here
    }

    public function createStudent(Request $request) {
    $student = new Student;
    $student->name = $request->name;
    $student->surname = $request->surname;
    $student->phone = $request->phone;
    $student->birthday = $request->birthday;
    $student->adress = $request->adress;
    $student->email = $request->email;
    $student->course = $request->course;
    $student->save();

    return response()->json([
        "message" => "student record created"
    ], 201);
  }
    }

    public function getStudent($id) {
      // logic to get a student record goes here
    }

    public function updateStudent(Request $request, $id) {
      // logic to update a student record goes here
    }

    public function deleteStudent ($id) {
      // logic to delete a student record goes here
    }
}
