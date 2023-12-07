<?php

namespace App\Http\Controllers;

use App\KelasUmum;
use Illuminate\Http\Request;

class KelasUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showKelasUmum()
{
    $kelas_umums = KelasUmum::all();
    return view('admin.kelas-umum.halaman', compact('kelas_umums'));
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
     * @param  \App\KelasUmum  $kelasUmum
     * @return \Illuminate\Http\Response
     */
    public function show(KelasUmum $kelasUmum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KelasUmum  $kelasUmum
     * @return \Illuminate\Http\Response
     */
    public function edit(KelasUmum $kelasUmum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KelasUmum  $kelasUmum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelasUmum $kelasUmum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KelasUmum  $kelasUmum
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelasUmum $kelasUmum)
    {
        //
    }
}
