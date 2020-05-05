<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class TeacherController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index()
    {
        $teacher = User::where('role', '2')->get();

        return view('teacher.datapengajar', compact('teacher'));
    }

    // // create

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nik' => 'required',
    //         'nama' => 'required',
    //         'jabatan' => 'required',
    //         'bidang' => 'required'
    //     ]);

    //     Teacher::create($request->all());

    //     return redirect('datapengajar')->with('statuscreate', 'Data Pengajar Berhasil Ditambahkan!');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Teacher  $teacher
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Teacher $teacher)
    // {
    //     $teacher = User::where('id', $user)->first();

    //     return view('teacher.show', compact('teacher'));
    // }

    // // edit

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Teacher  $teacher
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Teacher $teacher)
    // {
    //     $request->validate([
    //         'nik' => 'required',
    //         'nama' => 'required',
    //         'jabatan' => 'required',
    //         'bidang' => 'required'
    //     ]);

    //     Teacher::where('id', $teacher->id)
    //         ->update([
    //             'nik' => $request->nik,
    //             'nama' => $request->nama,
    //             'jabatan' => $request->jabatan,
    //             'bidang' => $request->bidang
    //     ]);

    //     return redirect('datapengajar')->with('statusupdate', 'Data Pengajar Berhasil Diubah!');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Teacher  $teacher
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Teacher $teacher)
    // {
    //     Teacher::destroy($teacher->id);
        
    //     return redirect('datapengajar')->with('statusdelete', 'Data Pengajar Berhasil Dihapus!');
    // }
    
    public function showteacher()
    {
        $teacher = Teacher::all();
        //$teacher = Teacher::where('id', session('idteacher'))->first();
        

        return view('pengajarprofil.pengajarprofil', compact('teacher'));

        // return view('pengajarprofil.pengajarprofil', compact('teacher')); - ASLINYA BAKAL GINI
        
    }

    public function indexteacher()
    {
        $users = User::where('role', '2')->get();

        return view('pengajarprofil.pengajarprofil', compact('users'));
    }

    public function editteacher($user)
    {
        $user = User::where('id', $user)->first();

        return view('pengajarprofil.edit', compact('user'));
    }

    public function updateteacher(Request $request, $user)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            // 'email' => 'required|unique:users,email',
            'jabatan' => 'required',
            'bidang' => 'required',
            // 'role' => 'required',
        ]);

        User::where('id', $user)
        ->update([
            'nik' => $request->nik,
            'name' => $request->name,
            // 'email' => $request->email,
            'jabatan' => $request->jabatan,
            'bidang' => $request->bidang,
            // 'role' => $request->role,
        ]);
    
        return redirect('pengajarprofil')->with('statusupdate', 'Data Login Berhasil Diubah!');
    }
}
