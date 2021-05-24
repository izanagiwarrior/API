<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    //
    public function index(){
       return Customer::all();
    }

    //bingung ini setiap buat customer harus buat transaksi dulu atau ngga
    public function create(Request $request)
    {
        $customer = new Customer;
        $customer->id_transaksi = 0;
        $customer->namaCustomer = $request->namaCustomer;
        $customer->alamatCustomer = $request->alamatCustomer;
        $customer->noTelp = $request->noTelp;
        $customer->save();
        return "Customer berhasil dibuat";
    }

    public function update(Request $request, $id)
    {
        $idTransaksi = 0;
        $namaCustomer = $request->namaCustomer;
        $alamatCustomer = $request->alamatCustomer;
        $noTelp = $request->noTelp;

        $customer = Customer::find($id);

        $customer->id_transaksi = $idTransaksi;
        $customer->namaCustomer = $namaCustomer;
        $customer->alamatCustomer = $alamatCustomer;
        $customer->noTelp = $noTelp;
        $customer->save();

        return "Customer berhasil di update!";
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return "Customer berhasil dihapus!";
    }

    public function index2()
    {
        $customer = Customer::all();
        return view('action.customer.customer',compact('customer'));
    }

    public function create_view()
    {
        return view('action.customer.create');
    }

    public function create_process(Request $request)
    {
        $customer = new Customer;
        $customer->id_transaksi = 0;
        $customer->namaCustomer = $request->namaCustomer;
        $customer->alamatCustomer = $request->alamatCustomer;
        $customer->noTelp = $request->noTelp;
        $customer->save();

        return redirect(route('customer'));
    }

    public function update_view($id)
    {
        $customer = Customer::find($id);
        return view('action.customer.update',compact('customer'));
    }

    public function update_process($id,Request $request)
    {
        $customer = Customer::find($id);
        $customer->namaCustomer = $request->namaCustomer;
        $customer->alamatCustomer = $request->alamatCustomer;
        $customer->noTelp = $request->noTelp;
        $customer->save();

        return redirect(route('customer'));
    }

    public function deleteCustomer(Request $request)
    {
        $customer = Customer::find($request->id);
        $customer->delete();

        return redirect(route('customer'));
    }
}
