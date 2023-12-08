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
    public function tampilFormTambah()
    {
        return view('admin.kelas-umum.tambah_pelajaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpanPelajaran(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        // Simpan data ke database
        KelasUmum::create([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        // Redirect atau berikan respons yang sesuai
        return redirect('/admin/kelas-umum/halaman')->with('success', 'Pelajaran berhasil ditambahkan!');
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
    public function editForm($id)
    {
        $kelas_umum = KelasUmum::find($id);
        return view('admin.kelas-umum.edit_pelajaran', compact('kelas_umum'));
    }

    public function updatePelajaran(Request $request, $id)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        // Update data ke database
        $kelas_umum = KelasUmum::find($id);
        $kelas_umum->update([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        // Redirect atau berikan respons yang sesuai
        return redirect('/admin/kelas-umum/halaman')->with('success', 'Pelajaran berhasil diperbarui!');
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
    public function hapusPelajaran($id)
    {
        $kelas_umum = KelasUmum::find($id);
        $kelas_umum->delete();

        return redirect('/admin/kelas-umum/halaman')->with('success', 'Pelajaran berhasil dihapus!');
    }
}
