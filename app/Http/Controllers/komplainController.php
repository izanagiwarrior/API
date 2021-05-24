<?php

namespace App\Http\Controllers;

use App\Models\Komplain;
use Illuminate\Http\Request;

class komplainController extends Controller
{
    //
    public function index()
    {
        return Komplain::all();
    }

    //bingung ini setiap buat customer harus buat transaksi dulu atau ngga
    public function create(Request $request)
    {
        $komplain = new Komplain;
        $komplain->id_customer = 0;
        $komplain->id_pengiriman = 0;
        $komplain->id_barang = 0;
        $komplain->id_pegawai = 0;
        $komplain->id_transaksi = 0;
        $komplain->jenisKomplain = $request->jenisKomplain;
        $komplain->tanggalKomplain = $request->tanggalKomplain;
        $komplain->save();
        return "Komplain berhasil dibuat";
    }

    public function update(Request $request, $id)
    {
        $idCustomer = 0;
        $idPengiriman = 0;
        $idBarang = 0;
        $idPegawai = 0;
        $idTransaksi = 0;
        $jenisKomplain = $request->jenisKomplain;
        $tanggalKomplain = $request->tanggalKomplain;

        $komplain = Komplain::find($id);

        $komplain->id_customer = $idCustomer;
        $komplain->id_pengiriman = $idPengiriman;
        $komplain->id_barang = $idBarang;
        $komplain->id_pegawai = $idPegawai;
        $komplain->id_transaksi = $idTransaksi;
        $komplain->jenisKomplain = $jenisKomplain;
        $komplain->tanggalKomplain = $tanggalKomplain;
        $komplain->save();

        return "Komplain berhasil di update!";
    }

    public function delete($id)
    {
        $komplain = Komplain::find($id);
        $komplain->delete();

        return "Customer berhasil dihapus!";
    }

    public function index2()
    {
        $komplain = Komplain::all();
        return view('action.komplain.komplain', compact('komplain'));
    }

    public function create_view()
    {
        return view('action.komplain.create');
    }

    public function create_process(Request $request)
    {
        $komplain = new Komplain;
        $komplain->id_customer = 0;
        $komplain->id_pengiriman = 0;
        $komplain->id_barang = 0;
        $komplain->id_pegawai = 0;
        $komplain->id_transaksi = 0;
        $komplain->jenisKomplain = $request->jenisKomplain;
        $komplain->tanggalKomplain = $request->tanggalKomplain;
        $komplain->save();

        return redirect(route('komplain'));
    }

    public function update_view($id)
    {
        $komplain = Komplain::find($id);
        return view('action.komplain.update', compact('komplain'));
    }

    public function update_process($id, Request $request)
    {
        $komplain = Komplain::find($id);
        $komplain->id_customer = 0;
        $komplain->id_pengiriman = 0;
        $komplain->id_barang = 0;
        $komplain->id_pegawai = 0;
        $komplain->id_transaksi = 0;
        $komplain->jenisKomplain = $request->jenisKomplain;
        $komplain->tanggalKomplain = $request->tanggalKomplain;
        $komplain->save();

        return redirect(route('komplain'));
    }

    public function deleteKomplain(Request $request)
    {
        $komplain = Komplain::find($request->id);
        $komplain->delete();

        return redirect(route('komplain'));
    }
}
