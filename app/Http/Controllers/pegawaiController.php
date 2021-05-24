<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    //
    public function index()
    {
        return Pegawai::all();
    }

    //bingung ini setiap buat customer harus buat transaksi dulu atau ngga
    public function create(Request $request)
    {
        $pegawai = new Pegawai;
        $pegawai->namaPegawai = $request->namaPegawai;
        $pegawai->alamatPegawai = $request->alamatPegawai;
        $pegawai->noTelp = $request->noTelp;
        $pegawai->divisi = $request->divisi;
        $pegawai->gaji = $request->gaji;
        $pegawai->save();
        return "Pegawai berhasil dibuat";
    }

    public function update(Request $request, $id)
    {
        $namaPegawai = $request->namaPegawai;
        $alamatPegawai = $request->alamatPegawai;
        $noTelp = $request->noTelp;
        $divisi = $request->divisi;
        $gaji = $request->gaji;

        $pegawai = Pegawai::find($id);

        $pegawai->namaPegawai = $namaPegawai;
        $pegawai->alamatPegawai = $alamatPegawai;
        $pegawai->noTelp = $noTelp;
        $pegawai->divisi = $divisi;
        $pegawai->gaji = $gaji;
        $pegawai->save();

        return "Pegawai berhasil di update!";
    }

    public function delete($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        return "Customer berhasil dihapus!";
    }

    public function index2()
    {
        $pegawai = Pegawai::all();
        return view('action.pegawai.pegawai', compact('pegawai'));
    }

    public function create_view()
    {
        return view('action.pegawai.create');
    }

    public function create_process(Request $request)
    {
        $pegawai = new Pegawai;
        $pegawai->namaPegawai = $request->namaPegawai;
        $pegawai->alamatPegawai = $request->alamatPegawai;
        $pegawai->noTelp = $request->noTelp;
        $pegawai->divisi = $request->divisi;
        $pegawai->gaji = $request->gaji;
        $pegawai->save();

        return redirect(route('pegawai'));
    }

    public function update_view($id)
    {
        $pegawai = Pegawai::find($id);
        return view('action.pegawai.update', compact('pegawai'));
    }

    public function update_process($id, Request $request)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->namaPegawai = $request->namaPegawai;
        $pegawai->alamatPegawai = $request->alamatPegawai;
        $pegawai->noTelp = $request->noTelp;
        $pegawai->divisi = $request->divisi;
        $pegawai->gaji = $request->gaji;
        $pegawai->save();

        return redirect(route('pegawai'));
    }

    public function deletePegawai(Request $request)
    {
        $pegawai = Pegawai::find($request->id);
        $pegawai->delete();

        return redirect(route('pegawai'));
    }
}
