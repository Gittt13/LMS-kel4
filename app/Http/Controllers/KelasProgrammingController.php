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


    public function tampilFormTambah()
    {
        return view('admin.kelas-programming.tambah_pelajaran');
    }

    public function simpanKelasProgramming(Request $request)
    {
        
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        
        KelasProgramming::create([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        
        return redirect('/admin/kelas-programming/halaman')->with('success', 'Kelas programming berhasil ditambahkan!');
    }

    public function editForm($id)
    {
        $kelas_programming = KelasProgramming::find($id);
        return view('admin.kelas-programming.edit_pelajaran', compact('kelas_programming'));
    }

    public function updateKelasProgramming(Request $request, $id)
    {
        
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        
        $kelas_programming = KelasProgramming::find($id);
        $kelas_programming->update([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
        ]);


        return redirect('/admin/kelas-programming/halaman')->with('success', 'Kelas programming berhasil diperbarui!');
    }

    public function hapusKelasProgramming($id)
    {
        $kelas_programming = KelasProgramming::find($id);
        $kelas_programming->delete();

        return redirect('/admin/kelas-programming/halaman')->with('success', 'Kelas programming berhasil dihapus!');
    }
}
