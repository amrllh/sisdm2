<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();

        return view('dataketerampilan.dataketerampilan', compact('courses'));
    }

    //create

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'keterampilan' => 'required',
            'deskripsi' => 'required',
        ]);

        $courses = new Course;

        $courses->keterampilan = $request->keterampilan;
        $courses->deskripsi = $request->deskripsi;

        $courses->save();

        return redirect('dataketerampilan')->with('statuscreate', 'Data Keterampilan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = Course::where('id', $id)->first();
        
        return view('dataketerampilan.show', compact('courses'));
    }

    // edit

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'keterampilan' => 'required',
            'deskripsi' => 'required',
        ]);
        
        Course::where('id', $id)
            ->update([
                'keterampilan' => $request->keterampilan,
                'deskripsi' => $request->deskripsi,
            ]);
        
        return redirect('dataketerampilan')->with('statusupdate', 'Data Keterampilan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::destroy($id);
        
        return redirect('dataketerampilan')->with('statusdelete', 'Data Pribadi Berhasil Dihapus!');
    }
}
