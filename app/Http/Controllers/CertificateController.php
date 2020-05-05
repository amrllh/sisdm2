<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Citizen;
use App\Course;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Citizen::where('status', 1)->get();

        return view('cetaksertifikat.cetaksertifikat', compact('certificates'));
    }

    public function cetak($warga)
    {
        $warga = Citizen::where('nik', $warga)->first();

        return view('cetaksertifikat.sertifikat', compact('warga'));
    }
}
