<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();

        return view('datarole.datarole', compact('groups'));
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
        $request -> validate([
            'role' => 'required|unique:groups,role',
            'keterangan' => 'required'
        ]);

        $group = new Group;

        $group->role = $request->role;
        $group->keterangan = $request->keterangan;

        $group->save();

        return redirect()->back()->with('statuscreate', 'Data Role Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $groups = Group::where('id', $id)->first();

        return view('datarole.show', compact('groups'));
    }
    
    // edit

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request -> validate ([
            'role' => 'required',
            'keterangan' => 'required'
        ]);

        Group::where('id', $id)
            ->update([
                'role' => $request->role,
                'keterangan' => $request->keterangan,
            ]);
        
        return redirect()->back()->with('statusupdate', 'Data Role Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::destroy($id);

        return redirect('datarole')->with('statusdelete', 'Data Role Berhasil Dihapus!');
    }
}
