<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Citizen;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experience = Citizen::all();
        $experience_implode = implode(", ", array_column($experience[0]->experiences->toArray(), 'pengalaman1'));

        return view('experience.datapengalaman', compact('experience'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nik)
    {
        $warga = Citizen::where('nik', $nik)->firstOrFail();

        return view('experience.create', compact('warga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dd($request);
        foreach ($request->addmore as $index=>$pengalaman) {
            $experience = new Experience;

            $experience->nik = $request->nik;
            $experience->pengalaman1 = $pengalaman;
            $experience->tempatkerja = $request->tempatkerja[$index];
            $experience->lamakerja = $request->lamakerja[$index];

            $experience->save();
        }

        return redirect()->back()->with('statuscreate', 'Data Pengalaman Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show($nik)
    {
        $experience = Experience::where('nik', $nik)->get();

        return view('experience.show', compact('experience', 'nik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        return view('experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        Experience::where('id', $experience->id)
            ->update([
                'pengalaman1' => $request->pengalaman1,
                'tempatkerja' => $request->tempatkerja,
                'lamakerja' => $request->lamakerja,
        ]);

        return redirect()->back()->with('statusupdate', 'Data Pengalaman Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        Experience::destroy($experience->id);

        return redirect()->back()->with('statusdelete', 'Data Pengalaman Berhasil Dihapus!');
    }
}
