<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Citizen;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
    public function dashboardpengajar()
    {
        return view('dashboardpengajar');
    }
    public function dashboardpimpinan()
    {
        return view('dashboardpimpinan');
    }
    public function dashboardwarga()
    {
        return view('dashboardwarga');
    }
}
