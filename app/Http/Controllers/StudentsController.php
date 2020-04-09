<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
        // ? Validasi 
        $request->validate([
            'nama' =>'required',
            'nis' => 'required',
            'email' => 'required|email',
            'alamat' => 'required|max:256',
        ]);

        // ? Memasukan record data kedalam database ( ada 2 cara )

        // ? Cara 1 Menggunakan Object
            // ! $student = new Student;
            // ? Baris di atas sebagai instansiasi object dari Model Student
            // ! $student->nama = $request->nama;
            // ! $student->nis = $request->nis;
            // ! $student->email = $request->email;
            // ! $student->alamat = $request->alamat;
            // ? baris diatas adalah data yang di tangkap dari form input halaman create
            // ! $student->save();
            // ? Baris di atas untuk menyimpan record data yang sudah di tangkap

        // ? Cara 2 Menggunakan Array 
            // ! Student::create([
            // !    'nama'=> $request->nama,
            // !    'nis'=> $request->nis,
            // !    'email'=> $request->email,
            // !    'alamat'=> $request->alamat,
            // ! ]);
            // ? untuk menggunakan cara array sperti ini maka perlu menambahkan method
            // ? ( fillable ) pada model student

        // ? Cara 3 create all ( mengambil semua request )
            Student::create($request->all());
            return redirect('/students')->with('status', 'Data student berhasil ditambahkan');
            // ? untuk menggunakan cara sperti ini maka perlu menambahkan method
            // ? ( fillable ) pada model student
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.detail', ['student' => $student ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // ? Validasi 
        $request->validate([
            'nama' =>'required',
            'nis' => 'required',
            'email' => 'required|email',
            'alamat' => 'required|max:256',
        ]);
        // ? Update menerima inputan dari edit
        Student::where('id', $student->id )->update([
                'nama' => $request->nama,
                'nis' => $request->nis,
                'email' => $request->email,
                'alamat' => $request->alamat,
        ]);
        return redirect('/students')->with('status', 'Data student berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data student berhasil didelete');
        //
    }
}
