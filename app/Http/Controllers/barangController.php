<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class barangController extends Controller
{
    //
    public function index(){
        return Barang::all();
    }

    public function create(Request $request)
    {
        $barang = new Barang;
        $barang->namaBarang = $request->namaBarang;
        $barang->beratBarang = $request->beratBarang;
        $barang->ukuranBarang = $request->ukuranBarang;
        $barang->save();
        return "Barang berhasil dibuat";
    }

    public function update(Request $request, $id)
    {

        $namaBarang = $request->namabarang;
        $beratBarang = $request->beratBarang;
        $ukuranBarang = $request->ukuranBarang;

        $barang = Barang::find($id);

        $barang->namaBarang = $namaBarang;
        $barang->beratBarang = $beratBarang;
        $barang->ukuranBarang = $ukuranBarang;
        $barang->save();

        return "Barang berhasil di update!";
    }

    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return "Barang berhasil dihapus!";
    }

    public function index2()
    {
        $barang = Barang::all();
        return view('action.barang.barang',compact('barang'));
    }

    public function create_view()
    {
        return view('action.barang.create');
    }

    public function create_process(Request $request)
    {
        $barang = new Barang;
        $barang->namaBarang = $request->namaBarang;
        $barang->beratBarang = $request->beratBarang;
        $barang->ukuranBarang = $request->ukuranBarang;
        $barang->save();

        return redirect(route('barang'));
    }

    public function update_view($id)
    {
        $barang = Barang::find($id);
        return view('action.barang.update',compact('barang'));
    }

    public function update_process($id,Request $request)
    {
        $barang = Barang::find($id);
        $barang->namaBarang = $request->namaBarang;
        $barang->beratBarang = $request->beratBarang;
        $barang->ukuranBarang = $request->ukuranBarang;
        $barang->save();

        return redirect(route('barang'));
    }

    public function deleteBarang(Request $request)
    {
        $barang = Barang::find($request->id);
        $barang->delete();

        return redirect(route('barang'));
    }
}
