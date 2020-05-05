<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Skill;
use App\Citizen;
use App\MasterExpertise;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$citizens = Citizen::all();
        $skill = Skill::all();
        $wargas = Citizen::all();
        // dd($wargas[0]->expertises[0]);
        //$expertises = MasterExpertise::all();
        //$skill_implode = implode(", ", array_column($skill[0]->masterexpertises->expertise->toArray(), 'expertise_id'));
        // $skill_implode = implode(", ", array_column($skill[0]->masterexpertises->expertise->toArray(), 'expertise_id'));
        //dd($skill[0]->masterexpertises);
        return view('skill.datakeahlian', compact('skill', 'wargas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nik)
    {
        $warga = Citizen::where('nik', $nik)->firstOrFail();
        
        return view('skill.create', compact('warga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->addmore as $keahlian) {
            $skill = new Skill;

            $skill->member_id = $request->id;
            $skill->expertise_id = $keahlian;

            $skill->save();
        }

        // $citizen = Citizen::find(2);
        // $citizen->masterexpertise()->sync([1, '2', '3']);

        return redirect()->back()->with('statuscreate', 'Data Keahlian Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skill = Skill::where('member_id', $id)->get();
        $wargas = Citizen::where('id', $id)->get();
        $masterexpertises = MasterExpertise::all();
        
        return view('skill.show', compact('skill', 'wargas', 'masterexpertises'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        Skill::where('id', $skill->id)
            ->update([
                'expertise_id' => $request->addmore,
        ]);

        return redirect()->back()->with('statusupdate', 'Data Keahlian Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        Skill::destroy($skill->id);
        
        return redirect()->back()->with('statusdelete', 'Data Keahlian Berhasil Dihapus!');
    }

}
