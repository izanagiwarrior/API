<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_pengiriman');
            $table->unsignedBigInteger('id_barang');
            $table->date('tanggalTransaksi');
            $table->string('jenisPembelian');

            // $table->foreign('id_customer')->references('id')->on('customer');
            // $table->foreign('id_pengiriman')->references('id')->on('pengiriman');
            // $table->foreign('id_barang')->references('id')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
