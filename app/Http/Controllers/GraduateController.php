<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Citizen;
use App\Skill;
use App\Experience;
use App\Performance;

use Illuminate\Http\Request;

class GraduateController extends Controller
{
    public function datalulus()
    {
        $wargalulus = Citizen::whereHas('performances')->orderBy('nama', 'asc')->get();

        return view('pimpinankelulusan.datalulus', compact('wargalulus'));
    }

    public function lulus($nik)
    {
        Citizen::where('nik', $nik)
            ->update([
                'status' => 1,
            ]);
        
        return redirect()->back()->with('statusupdate', 'Data Status Berhasil Diubah!');
    }

    public function ulang($nik)
    {
        Citizen::where('nik', $nik)
            ->update([
                'status' => 2,
            ]);
        
        return redirect()->back()->with('statusupdate', 'Data Status Berhasil Diubah!');
    }
    
    public function tidaklulus($nik)
    {
        Citizen::where('nik', $nik)
            ->update([
                'status' => 3,
            ]);
        
        return redirect()->back()->with('statusupdate', 'Data Status Berhasil Diubah!');
    }
}
