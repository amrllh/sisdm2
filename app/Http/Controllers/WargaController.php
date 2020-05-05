<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Citizen;
use App\Skill;
use App\Experience;
use App\Performance;
use App\Course;
use App\User;
use App\MasterExpertise;
use Validator;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $wargas = Citizen::all();
        $courses = Course::all();
        
        $advertisement = Citizen::where('pelatihan_id', '1')->get();
        $adv = $advertisement->count();
        
        $customerservice = Citizen::where('pelatihan_id', '2')->get();
        $cs = $customerservice->count();
        
        $wrg = $wargas->count();

        return view('warga.datapribadi', compact('wargas', 'wrg', 'adv', 'cs', 'courses'));
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
        $request->validate([
            'nik' => 'required|unique:wargas,nik',
            'nama' => 'required',
            'kelamin' => 'required',
            'agama' => 'required',
            'tempatlahir' => 'required',
            'tgllahir' => 'required',
            'alamat' => 'required',
            'keterampilan' => 'required',
            'email' => 'required|unique:wargas,email',
            // 'password' => 'required'
        ]);
            
        $warga = new Citizen;
        $warga->nik = $request->nik;
        $warga->nama = $request->nama;
        $warga->kelamin = $request->kelamin;
        $warga->agama = $request->agama;
        $warga->tempatlahir = $request->tempatlahir;
        $warga->tgllahir = $request->tgllahir;
        $warga->alamat = $request->alamat;
        $warga->pelatihan_id = $request->keterampilan;
        $warga->email = $request->email;
        $warga->password = Hash::make('kampungmarketer');
            
        $warga->save();
    
        $performance = new Performance;
        $performance->nik = $warga->nik;
        $performance->nilai = -1;
        $performance->memo = "";
        $performance->catatan = "";

        $performance->save();

        $user = new User;
        $user->nik = $warga->nik;
        $user->name = $warga->nama;
        $user->email = $warga->email;
        $user->password = Hash::make('kampungmarketer');
        $user->role = 0;    

        $user->save();

        return redirect('datapribadi')->with('statuscreate', 'Data Pribadi Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Citizen $warga)
    {
        $courses = Course::all();
        $masterexpertises = MasterExpertise::all();

        return view('warga.show', compact('warga', 'courses', 'masterexpertises'));
    }

    // edit

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citizen $warga)
    {
        
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'agama' => 'required',
            'tempatlahir' => 'required',
            'tgllahir' => 'required',
            'alamat' => 'required',
            'keterampilan' => 'required',
            'email' => 'required',
        ]);

        Citizen::where('id', $warga->id)
            ->update([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'kelamin' => $request->kelamin,
                'agama' => $request->agama,
                'tempatlahir' => $request->tempatlahir,
                'tgllahir' => $request->tgllahir,
                'alamat' => $request->alamat,
                'pelatihan_id' => $request->keterampilan,
                'email' => $request->email,
            ]);

        return redirect()->back()->with('statusupdate', 'Data Pribadi Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citizen $warga)
    {
        Citizen::destroy($warga->id);
        
        return redirect('datapribadi')->with('statusdelete', 'Data Pribadi Berhasil Dihapus!');
    }


    // HALAMAN PENGAJAR

    public function indexinteacher()
    {

        $warga = Citizen::all();

        $advertisement = Citizen::where('pelatihan_id', '1')->get();
        $adv = $advertisement->count();

        $customerservice = Citizen::where('pelatihan_id', '2')->get();
        $cs = $customerservice->count();
        
        $wrg = $warga->count();
        
        // dd($warga);
        return view('pengajardatapriwa.datapriwa', compact('warga', 'wrg', 'adv', 'cs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function showinteacher($warga)
    {
        //$skill = Skill::where('member_id', $id)->get();
        //$warga = Citizen::where('id', $id)->get();

        $warga = Citizen::where('nik', $warga)->first();

        $skill = Skill::where('member_id', $warga->id)->get();
        // $skil_implode = implode(", ", array_column($skill->toArray(), 'ahli1'));

        $experiences = Experience::where('nik', $warga->nik)->get();
        $experience_implode = implode(", ", array_column($experiences->toArray(), 'pengalaman1'));

        return view('pengajardatapriwa.show', compact('warga', 'experiences', 'skill'));
    }

    // HALAMAN PIMPINAN

    public function indexinleader()
    {
        $warga = Citizen::all();

        $advertisement = Citizen::where('pelatihan_id', '1')->get();
        $adv = $advertisement->count();

        $customerservice = Citizen::where('pelatihan_id', '2')->get();
        $cs = $customerservice->count();
        
        $wrg = $warga->count();

        return view('pimpinandatapriwa.datapriwa', compact('warga', 'wrg', 'adv', 'cs'));
    }

    public function showinleader($warga)
    {
        $warga = Citizen::where('nik', $warga)->first();

        $skill = Skill::where('member_id', $warga->id)->get();
        // $skil_implode = implode(", ", array_column($skill->toArray(), 'ahli1'));

        $experiences = Experience::where('nik', $warga->nik)->get();
        $experience_implode = implode(", ", array_column($experiences->toArray(), 'pengalaman1'));

        return view('pimpinandatapriwa.show', compact('warga', 'experiences', 'skill'));
    }

    public function cetakinleader()
    {
        $warga = Citizen::all();
        
        return view('pimpinanlaporan.cetaklaporan', compact('warga'));
    }

    // HALAMAN WARGA

    public function showinwarga()
    {
        $show = Auth::user();
        // dd($show);
        $warga = Citizen::where('email', '=', $show->email)->first();
        if ($warga == null) {
            return redirect('dashboardwarga')->with('statusakun', 'Data Warga Tidak Ditemukan!');
        }
        // dd($warga);
        return view('wargadatapriwa.datapriwa', compact('warga'));
        // $skill = Skill::where('nik', $show->nik)->get();
        // $skil_implode = implode(", ", array_column($skill->toArray(), 'ahli1'));
    
        // $experience = Experience::where('nik', $show->nik)->get();
        // $experience_implode = implode(", ", array_column($skill->toArray(), 'pengalaman1'));
    }

}
