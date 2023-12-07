<?php

namespace App\Http\Controllers;

use App\KelasTambahan;
use Illuminate\Http\Request;

class KelasTambahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showKelasTambahan()
{
    $kelas_tambahans = KelasTambahan::all();
    return view('admin.kelas-tambahan.halaman', compact('kelas_tambahans'));
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
     * @param  \App\KelasTambahan  $kelasTambahan
     * @return \Illuminate\Http\Response
     */
    public function show(KelasTambahan $kelasTambahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KelasTambahan  $kelasTambahan
     * @return \Illuminate\Http\Response
     */
    public function edit(KelasTambahan $kelasTambahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KelasTambahan  $kelasTambahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelasTambahan $kelasTambahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KelasTambahan  $kelasTambahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelasTambahan $kelasTambahan)
    {
        //
    }
}
