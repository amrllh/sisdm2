<?php

namespace App\Http\Controllers;

use App\Leader;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leader = User::where('role', '3')->get();

        return view('leader.datapimpinan', compact('leader'));
    }

    // create

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'bidang' => 'required'
        ]);

        Leader::create($request->all());

        return redirect('datapimpinan')->with('statuscreate', 'Data Pimpinan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function show(Leader $leader)
    {
        $leader = User::where('id', $leader->id)->first();

        return view('leader.show', compact('leader'));
    }

    // edit

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leader $leader)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'bidang' => 'required'
        ]);

        Leader::where('id', $leader->id)
            ->update([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'bidang' => $request->bidang
        ]);

        return redirect('datapimpinan')->with('statusupdate', 'Data Pimpinan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leader $leader)
    {
        Leader::destroy($leader->id);
        
        return redirect('datapimpinan')->with('statusdelete', 'Data Pimpinan Berhasil Dihapus!');
    }

    public function indexleader()
    {
        $user = User::where('role', '3')->get();

        return view('pimpinanprofil.pimpinanprofil', compact('user'));
    }

    public function editleader($user)
    {
        $user = User::where('id', $user)->first();

        return view('pimpinanprofil.edit', compact('user'));
    }

    public function updateleader(Request $request, $user)
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

        return redirect('pimpinanprofil')->with('statusupdate', 'Data Login Berhasil Diubah!');
    }
}
