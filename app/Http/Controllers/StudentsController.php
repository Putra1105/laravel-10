<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.data')->with([
            'students' => Students::all()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentsRequest $request)
    {
        $validate = $request->validated();

        $students = new Students;
        $students->idstudents = $request->txtid;
        $students->name = $request->txtfullname;
        $students->gender = $request->txtgender;
        $students->address = $request->txtaddress;
        $students->email = $request->txtemail;
        $students->phone = $request->txtphone;
        $students->save();

        return redirect('students')->with('msg', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students, $idstudents)
    {
        $data = $students->find($idstudents);
        return view('students.formEdit')->with([
            'txtid' => $data->idstudents,
            'txtfullname' => $data->name,
            'txtgender' => $data->gender,
            'txtaddress' => $data->address,
            'txtemail' => $data->email,
            'txtphone' => $data->phone
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentsRequest $request, Students $students, $idstudents)
    {
        $data = $students->find($idstudents);
        $data->idstudents = $request->txtid;
        $data->name = $request->txtfullname;
        $data->gender = $request->txtgender;
        $data->address = $request->txtaddress;
        $data->email = $request->txtemail;
        $data->phone = $request->txtphone;
        $data->save();

        return redirect('students')->with('msg', 'Data Dengan Nama'.$data->name.'Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students)
    {
        //
    }
}
