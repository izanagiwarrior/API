<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Pengiriman;
use App\Models\Barang;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    public $timestamps = false;

    // bagian customer
    public function customer(){
        return $this->hasOne(Customer::class, 'id_transaksi', 'id');
    }

    public function customers(){
        return $this->hasMany(Customer::class, 'id_transaksi', 'id');
    }

    // bagian pengiriman
    public function pengiriman(){
        return $this->hasOne(Pengiriman::class, 'id_transaksi', 'id');
    }


    public function pengirimans(){
        return $this->hasMany(Customer::class, 'id_transaksi', 'id');
    }

    // bagian barang
    
    public function barang(){
        return $this->hasOne(Barang::class, 'id_transaksi', 'id');
    }


    public function barangs(){
        return $this->hasMany(Barang::class, 'id_transaksi', 'id');
    }


}
