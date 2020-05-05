<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PDF;
use Illuminate\Http\Request;
use App\Citizen;
use App\Skill;
use App\Experience;
use App\Performance;

class ReportController extends Controller
{
    public function lapdapriwa() 
    {
        $warga = Citizen::all();

        return view('pimpinanlaporan.lapdapriwa', compact('warga'));
    }
    // public function lapdapriwacetak()
    // {
    //     // $warga = Citizen::all();
    //     $pdf = \PDF::loadView('pimpinanlaporan.lapdapriwa')->setPaper('a4', 'landscape');
    //     return $pdf->stream('Laporan Data Pribadi Warga.pdf');
    // }

    
    public function lapkinerja() 
    {
        $warga = Citizen::whereHas('performances')->get();

        return view('pimpinanlaporan.lapkinerja', compact('warga'));
    }
    
    // public function lapkinerjacetak()
    // {
    //     $pdf = \PDF::loadView('pimpinanlaporan.lapkinerja')->setPaper('a4', 'landscape');
    //     return $pdf->stream('Laporan Penilaian Kinerja Warga.pdf');
    // }

    public function lapwarga($warga)
    {
        $warga = Citizen::where('nik', $warga)->first();

        $skill = Skill::where('member_id', $warga->id)->get();

        $experiences = Experience::where('nik', $warga->nik)->get();
        $experience_implode = implode(", ", array_column($experiences->toArray(), 'pengalaman1'));

        return view('pimpinanlaporan.lapwarga', compact('warga', 'experiences', 'skill'));
    }
}
