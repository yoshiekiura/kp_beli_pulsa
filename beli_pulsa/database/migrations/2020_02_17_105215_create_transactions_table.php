<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama_produk');
            $table->string('nama_provider');
            $table->string('voucher');
            $table->string('no_telpon');
            $table->integer('harga');
            $table->string('kode');
            $table->string('kode_unik');
            $table->integer('bank');
            $table->string('tanggal_beli');
            $table->integer('harga_total');
            $table->dateTime('expired');

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
        Schema::dropIfExists('transactions');
    }
}
