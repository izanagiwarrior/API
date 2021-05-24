<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table = 'pengiriman';
    public $timestamps = false;

    // bagian customer
    public function customer(){
        return $this->belongsTo(Customer::class, );
    }

    public function customers(){
        return $this->hasMany(Customer::class, '', 'id');
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
