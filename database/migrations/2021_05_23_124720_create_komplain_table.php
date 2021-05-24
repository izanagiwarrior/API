<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomplainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komplain', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_pengiriman');
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('id_pegawai');
            $table->unsignedBigInteger('id_transaksi');
            $table->string('jenisKomplain');
            $table->date('tanggalKomplain');

            // $table->foreign('id_customer')->references('id')->on('customer');
            // $table->foreign('id_pengiriman')->references('id')->on('pengiriman');
            // $table->foreign('id_barang')->references('id')->on('barang');
            // $table->foreign('id_pegawai')->references('id')->on('pegawai');
            // $table->foreign('id_transaksi')->references('id')->on('transaksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komplain');
    }
}
