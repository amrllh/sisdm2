<?php

namespace App\Http\Controllers;

use App\MasterExpertise;
use App\Skill;
use App\Citizen;
use Illuminate\Http\Request;

class MasterExpertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masterexpertises = MasterExpertise::all();

        return view('datamasterexpertise.datamasterexpertise', compact('masterexpertises'));
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
        $request -> validate ([
            'expertise' => 'required|unique:master_keahlians,expertise',
        ]);
        
        $masterexpertise = new MasterExpertise;

        $masterexpertise->expertise = $request->expertise;

        $masterexpertise->save();

        return redirect()->back()->with('statuscreate', 'Data Master Keahlian Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MasterExpertise  $masterExpertise
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $masterexpertises = MasterExpertise::where('id', $id)->first();

        return view('datamasterexpertise.show', compact('masterexpertises'));
    }

    // edit

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MasterExpertise  $masterExpertise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request -> validate ([
            'expertise' => 'required',
        ]);

        MasterExpertise::where('id', $id)
            ->update([
                'expertise' => $request->expertise,
            ]);

        return redirect()->back()->with('statusupdate', 'Data Master Keahlian Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MasterExpertise  $masterExpertise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterExpertise::destroy($id);

        return redirect('datamasterexpertise')->with('statusdelete', 'Data Master Keahlian Berhasil Dihapus!');
    }
}
