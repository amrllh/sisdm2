<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Citizen;
use App\Absen;
use Carbon;

class AbsenController extends Controller
{
    public function index()
    {
        $wargas = Citizen::all();

        $times = Carbon\Carbon::now();

        return view('pengajarabsensi.absensi', compact('wargas', 'times'));
    }

    public function absen(Request $request)
    {
        $siswas = Citizen::where('pelatihan_id', $request->id_keterampilan)->where(function ($query) {
            $query->where('status', 0)
                    ->orWhere('status', 2);
        })->get();
        
        foreach ($siswas as $siswa) {
            $absen = new Absen;
            
            $absen->id_warga = $siswa->id;
            $absen->id_keterampilan = $siswa->pelatihan_id;
            $absen->tanggal = $request->tanggal;
            $absen->keterangan = 4;
            
            $absen->save();
            
        }
        $tanggal = Carbon\Carbon::parse($absen['tanggal'])->format('Y-m-d');
        // dd($tanggal);
        return redirect("/absen/".$tanggal."/".$absen->id_keterampilan);
    }

    public function lihatabsen($tanggal, $id_keterampilan) 
    {
        $absens = Absen::where('tanggal', $tanggal)->where('id_keterampilan', $id_keterampilan)->get();
        
        return view('pengajarabsensi.lihatabsensi', compact('absens', 'tanggal'));
    }

    public function absenmasuk(Request $request)
    {
        Absen::where('id', $request->id)
            ->update([
                'keterangan' => $request->keterangan,
            ]);

        return redirect()->back();
    }
}
