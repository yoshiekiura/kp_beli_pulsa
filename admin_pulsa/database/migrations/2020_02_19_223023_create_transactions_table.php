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
            $table->bigIncrements('id');
            $table->bigInteger('id_user')->unsigned()->nullable();
            $table->string('pulsa_code');
            $table->integer('id_bank')->unsigned();
            $table->string('no_telpon');
            $table->string('kode_unik');
            $table->double('harga_total');
            $table->integer('status_pembayaran');
            $table->integer('status_pengisian');
            $table->integer('status_transaksi');
            $table->dateTime('tanggal_beli');
            $table->dateTime('expired');
            $table->timestamps();
        });

        Schema::table('transactions', function (Blueprint $table) {
            // $table->foreign('id_harga')
            // ->references('id')->on('price_lists')
            // ->onDelete('cascade');
            $table->foreign('pulsa_code')
            ->references('pulsa_code')
            ->on('price_lists')
            ->onDelete('cascade');

            $table->foreign('id_user')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('id_bank')
            ->references('id')->on('banks')
            ->onDelete('cascade');
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
