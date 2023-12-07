<?php

namespace App\Http\Controllers;

use App\ProfilStudent;
use Illuminate\Http\Request;
use UniSharp\LaravelFilemanager\Controllers\Controller;

class ProfilStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = ProfilStudent::all();
        return view('students.profil_student')->with('profil', $profil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profil = ProfilStudent::whereId($id)->first();
        return view('students.edit_profil')->with('profil', $profil);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
        ]);

        $profil = ProfilStudent::find($id);
        $profil->nama = $request->nama;
        $profil->alamat = $request->alamat;
        $profil->email = $request->email;
        $profil->no_hp = $request->no_hp;
        $profil->save();

        // return redirect('students.profil_student');
        return redirect()->route('students.profil_student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
