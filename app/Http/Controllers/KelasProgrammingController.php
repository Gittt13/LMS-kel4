<?php

namespace App\Http\Controllers;

use App\KelasProgramming;
use Illuminate\Http\Request;

class KelasProgrammingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }
    public function showKelasProgramming()
{
    $kelas_programmings = KelasProgramming::all();
    return view('admin.kelas-programming.halaman', compact('kelas_programmings'));
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
     * @param  \App\KelasProgramming  $kelasProgramming
     * @return \Illuminate\Http\Response
     */
    public function show(KelasProgramming $kelasProgramming)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KelasProgramming  $kelasProgramming
     * @return \Illuminate\Http\Response
     */
    public function edit(KelasProgramming $kelasProgramming)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KelasProgramming  $kelasProgramming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelasProgramming $kelasProgramming)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KelasProgramming  $kelasProgramming
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelasProgramming $kelasProgramming)
    {
        //
    }
}
