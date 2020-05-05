<?php

namespace App\Http\Controllers;

use App\Performance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Citizen;
use App\Absen;
use App\User;

class PerformanceController extends Controller
{
    public function index()
    {
        $wargas = Citizen::whereHas('performances', function($query){
            $query->where('status', '!=', 0);
        })->get();
            
        return view('performance.nilaikinerja', compact('wargas'));
    }

    public function index1()
    {
        $wargas = Citizen::whereHas('performances', function($query){
            $query->where('status', '!=', 1);
        })->get();
            
        return view('pengajarpenilaian.pengajarpenilaian', compact('wargas'));
    }
    
    public function penilaian($performances) 
    {
        $performances = Performance::where('id', $performances)->first();
        // dd($performances->citizen->id);
        $absens = Absen::where('id_warga', $performances->citizen->id)->get();
        
        return view('pengajarpenilaian.penilaiankinerja', compact('performances', 'absens'));
    }

    public function nilai(Request $request, $performances)
    {
        $request->validate([
            'nilai' => 'required',
            'memo' => 'required',
            'catatan' => 'required',
        ]);
        
        Performance::where('id', $performances)
        ->update([
            'nilai' => $request->nilai,
            'memo' => $request->memo,
            'catatan' => $request->catatan,
            ]);
            
        return redirect('pengajarpenilaian')->with('statusupdate', 'Data Nilai Berhasil Dimasukkan!');
    }

    public function ubahpenilaian($performances) 
    {
        $performances = Performance::where('id', $performances)->first();

        $absens = Absen::where('id_warga', $performances->citizen->id)->get();
        
        return view('pengajarpenilaian.penilaiankinerja', compact('performances', 'absens'));
    }

    public function showinwarga() 
    {
        $show = Auth::user();

        $nilai = Performance::where('nik', $show->nik)->first();

        return view('wargapenilaian.datanilai', compact('nilai'));
    }
}
