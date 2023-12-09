<?php

namespace App\Http\Controllers;

use App\DataPeserta;
use Illuminate\Http\Request;

class DataPesertaController extends Controller
{
    public function index()
    {
        $data_pesertas = DataPeserta::all();  //select * from data_pesertas
        return view('admin/data-peserta/data_peserta', compact('data_pesertas'));
    }

    // Di controller Anda
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'nullable|string|email|max:100',
            'alamat' => 'nullable|string|max:255',
            'nomor_telepon' => 'nullable|string|max:20',
            'jenis_kelamin' => 'nullable|in:wanita,pria',
        ]);

        // Simpan foto ke direktori storage/app/public
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public', $fotoName);
        } else {
            $fotoName = null;
        }

        // Buat instance dari model DataPeserta
        $dataPeserta = new DataPeserta();
        $dataPeserta->nama = $request->input('nama');
        // Ubah foto menjadi string biner
        $dataPeserta->foto = $foto ? $foto->getContent() : null;
        $dataPeserta->email = $request->input('email');
        $dataPeserta->alamat = $request->input('alamat');
        $dataPeserta->nomor_telepon = $request->input('nomor_telepon');
        $dataPeserta->jenis_kelamin = $request->input('jenis_kelamin');

        // Simpan data peserta ke database
        $dataPeserta->save();

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('/admin/data_peserta')->with('success', 'Data peserta berhasil disimpan.');
    }

}
