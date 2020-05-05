<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Register;
use App\User;
use App\Group;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')->where('role', '!=', 0)->orderBy('role', 'desc')->get();

        $userwarga = DB::table('users')->where('role', '=', 0)->orderBy('role', 'desc')->get();

        return view('datalogin.datalog', compact('user', 'userwarga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();

        return view('register', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        
        $user->save();
        
        return redirect('login')->with('statuscreate', 'Registrasi Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $user = User::where('id', $user)->first();

        return view('datalogin.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $user = User::where('id', $user)->first();

        return view('datalogin.edit', compact('user')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            // 'email' => 'required',
            // 'password' => 'required',
            'jabatan' => 'required',
            'bidang' => 'required',
            // 'role' => 'required',
        ]);

        User::where('id', $user)
            ->update([
                'nik' => $request->nik,
                'name' => $request->name,
                // 'email' => $request->email,
                // 'password' => Hash::make($request->password),
                'jabatan' => $request->jabatan,
                'bidang' => $request->bidang,
                // 'role' => $request->role,
            ]);
        
            return redirect('datalogin')->with('statusupdate', 'Data Login Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        User::destroy($user);

        return redirect('datalogin')->with('statusdelete', 'Data Login Berhasil Dihapus!');
    }

    public function showlogin()
    {
        return view('login');
    }
    
    public function login(Request $request)
    {
        $credential = $request->only('email', 'password');
        
        if(Auth::attempt($credential))
        {
            $user = Auth::user();

            if ($user->role == '1') 
            {
                return redirect()->intended('/dashboard');
            }
            else if ($user->role == '2') 
            {
                return redirect()->intended('/dashboardpengajar');
            }
            else if ($user->role == '3') 
            {
                return redirect()->intended('/dashboardpimpinan');
            }
            else if ($user->role == '0')
            {
                return redirect()->intended('/dashboardwarga');
            }
        }
        else 
        {
            return redirect('/login')->with('error', 'Email atau password Anda salah.');
        }
    }
    
    public function logout()
    {
        Auth::logout();

        return redirect('/login')->with('statuslogout', 'Sesi Anda telah berakhir');
    }
}
