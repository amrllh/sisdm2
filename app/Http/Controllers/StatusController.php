<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Status;
use Validator;

class StatusController extends Controller
{
    public function index()
    {
        $status = Status::all();

        return view('status.datastatus', compact('status'));
    }

    public function store(Request $request)
    {
        $request -> validate([
            'status' => 'required',
            'keterangan' => 'required',  
        ]);

        $status = new Status;

        $status->status = $request->status;
        $status->keterangan = $request->keterangan;

        $status->save();

        return redirect('datastatus')->with('statuscreate', 'Data Status Berhasil Ditambahkan!');
    }

    public function show($id)
    {
        $status = Status::where('id', $id)->first();
        
        return view('status.show', compact('status'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'keterangan' => 'required',
        ]);
        
        Status::where('id', $id)
            ->update([
                'status' => $request->status,
                'keterangan' => $request->keterangan,
            ]);
        
        return redirect()->back()->with('statusupdate', 'Data Status Berhasil Diubah!');
    }

    public function destroy($id)
    {
        Status::destroy($id);
        
        return redirect('datastatus')->with('statusdelete', 'Data Status Berhasil Dihapus!');
    }
}
