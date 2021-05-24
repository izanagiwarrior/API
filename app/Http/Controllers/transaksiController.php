<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class transaksiController extends Controller
{
    //
    public function index()
    {
        return Transaksi::all();
    }

    //bingung ini setiap buat customer harus buat transaksi dulu atau ngga
    public function create(Request $request)
    {
        $transaksi = new Transaksi;
        $transaksi->id_customer = $request->idCustomer;
        $transaksi->id_pengiriman = $request->idPengiriman;
        $transaksi->id_barang = $request->idBarang;
        $transaksi->tanggalTransaksi = $request->tanggalTransaksi;
        $transaksi->jenisPembelian = $request->jenisPembelian;
        $transaksi->save();
        return "Transaksi berhasil dibuat";
    }

    public function update(Request $request, $id)
    {
        $idCustomer = $request->idCustomer;
        $idPengiriman = $request->idPengiriman;
        $idBarang = $request->idBarang;
        $tanggalTransaksi = $request->tanggalTransaksi;
        $jenisPembelian = $request->jenisPembelian;

        $transaksi = Transaksi::find($id);

        $transaksi->id_customer = $idCustomer;
        $transaksi->id_pengiriman = $idPengiriman;
        $transaksi->id_barang = $idBarang;
        $transaksi->tanggalTransaksi = $tanggalTransaksi;
        $transaksi->jenisPembelian = $jenisPembelian;
        $transaksi->save();

        return "Transaksi berhasil di update!";
    }

    public function delete($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();

        return "Transaksi berhasil dihapus!";
    }

    public function index2()
    {
        $transaksi = Transaksi::all();
        return view('action.transaksi.transaksi', compact('transaksi'));
    }

    public function create_view()
    {
        return view('action.transaksi.create');
    }

    public function create_process(Request $request)
    {
        $transaksi = new Transaksi;
        $transaksi->id_customer = $request->idCustomer;
        $transaksi->id_pengiriman = $request->idPengiriman;
        $transaksi->id_barang = $request->idBarang;
        $transaksi->tanggalTransaksi = $request->tanggalTransaksi;
        $transaksi->jenisPembelian = $request->jenisPembelian;
        $transaksi->save();

        return redirect(route('pengiriman'));
    }

    public function update_view($id)
    {
        $transaksi = Transaksi::find($id);
        return view('action.transaksi.update', compact('transaksi'));
    }

    public function update_process($id, Request $request)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->id_customer = $request->idCustomer;
        $transaksi->id_pengiriman = $request->idPengiriman;
        $transaksi->id_barang = $request->idBarang;
        $transaksi->tanggalTransaksi = $request->tanggalTransaksi;
        $transaksi->jenisPembelian = $request->jenisPembelian;
        $transaksi->save();

        return redirect(route('transaksi'));
    }

    public function deletePegawai(Request $request)
    {
        $transaksi = Transaksi::find($request->id);
        $transaksi->delete();

        return redirect(route('transaksi'));
    }
}
