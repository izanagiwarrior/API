<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use Illuminate\Http\Request;

class pengirimanController extends Controller
{
    //
    public function index()
    {
        return Pengiriman::all();
    }

    //bingung ini setiap buat customer harus buat transaksi dulu atau ngga
    public function create(Request $request)
    {
        $pengiriman = new Pengiriman;
        $pengiriman->namaKurir = $request->namaKurir;
        $pengiriman->tanggalPengiriman = $request->tanggalPengiriman;
        $pengiriman->namaEkspedisi = $request->namaEkspedisi;
        $pengiriman->save();
        return "Pengiriman berhasil dibuat";
    }

    public function update(Request $request, $id)
    {
        $namaKurir = $request->namaPegawai;
        $tanggalPengiriman = $request->alamatPegawai;
        $namaEkspedisi = $request->namaEkspedisi;

        $pengiriman = Pengiriman::find($id);

        $pengiriman->namaPegawai = $namaKurir;
        $pengiriman->alamatPegawai = $tanggalPengiriman;
        $pengiriman->namaEkspedisi = $namaEkspedisi;
        $pengiriman->save();

        return "Pegawai berhasil di update!";
    }

    public function delete($id)
    {
        $pengiriman = Pengiriman::find($id);
        $pengiriman->delete();

        return "Customer berhasil dihapus!";
    }

    public function index2()
    {
        $pengiriman = Pengiriman::all();
        return view('action.pengiriman.pengiriman', compact('pengiriman'));
    }

    public function create_view()
    {
        return view('action.pengiriman.create');
    }

    public function create_process(Request $request)
    {
        $pengiriman = new Pengiriman;
        $pengiriman->id_transaksi = 0;
        $pengiriman->namaKurir = $request->namaKurir;
        $pengiriman->tanggalPengiriman = $request->tanggalPengiriman;
        $pengiriman->namaEkspedisi = $request->namaEkspedisi;
        $pengiriman->save();

        return redirect(route('pengiriman'));
    }

    public function update_view($id)
    {
        $pengiriman = Pengiriman::find($id);
        return view('action.pengiriman.update', compact('pengiriman'));
    }

    public function update_process($id, Request $request)
    {
        $pengiriman = Pengiriman::find($id);
        $pengiriman->namaKurir = $request->namaKurir;
        $pengiriman->tanggalPengiriman = $request->tanggalPengiriman;
        $pengiriman->namaEkspedisi = $request->namaEkspedisi;
        $pengiriman->save();

        return redirect(route('pengiriman'));
    }

    public function deletePengiriman(Request $request)
    {
        $pengiriman = Pengiriman::find($request->id);
        $pengiriman->delete();

        return redirect(route('pengiriman'));
    }
}
