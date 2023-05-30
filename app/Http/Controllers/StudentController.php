<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.data')->with([
            'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $validate = $request->validated();

        $students = new Student;
        $students->idstudents = $request->idstudents;
        $students->fullname = $request->fullname;
        $students->gender = $request->gender;
        $students->address = $request->address;
        $students->emailaddress = $request->emailaddress;
        $students->phone = $request->phone;
        $students->save();

        return redirect('students')->with('msg', 'Add New Student Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $students, $idstudents)
    {
        $data = $students->find($idstudents);
        return view('students.formedit')->with([
            'idstudents' => $idstudents,
            'fullname' => $data->fullname,
            'gender' => $data->gender,
            'address' => $data->address,
            'emailaddress' => $data->emailaddress,
            'phone' => $data->phone,
        ]);
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
    public function update(UpdateStudentRequest $request, Student $students, $idstudents)
    {
        $data = $students->find($idstudents);
        $data->idstudents = $request->idstudents;
        $data->fullname = $request->fullname;
        $data->gender = $request->gender;
        $data->address = $request->address;
        $data->emailaddress = $request->emailaddress;
        $data->phone = $request->phone;
        $data->save();

        return redirect('students')->with('msg', 'Data dengan nama student ' . $data->fullname . ' berhasil di tambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $students, $idstudents)
    {
        $data = $students->find($idstudents);
        $data->delete();
        return redirect('students')->with('msg', 'Data dengan nama student ' . $data->fullname . ' berhasil di hapus');
    }
}