<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDetailTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_detail_transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_detail_transaksi');
            $table->string('id_transaksi');
            $table->string('id_barang');
            $table->string('transaksi_jenis');
            $table->integer('transaksi_harga');
            $table->integer('transaksi_jumlah');
            $table->string('transaksi_detail_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_detail_transaksi');
    }
}
