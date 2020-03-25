<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_transaksi')->unsigned();
            $table->string('nama');
            $table->string('no_telpon');
            $table->char('pesan');
            $table->integer('status');
            $table->dateTime('waktu_komplain');
            $table->timestamps();
        });

        Schema::table('complaints', function (Blueprint $table) {
            $table->foreign('id_transaksi')
            ->references('id')->on('transactions')
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
        Schema::dropIfExists('complaints');
    }
}
