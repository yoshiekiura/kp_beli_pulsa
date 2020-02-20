<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_lists', function (Blueprint $table) {
            $table->string('kode',30)->primary();
            $table->integer('id_product')->unsigned();
            $table->integer('id_provider')->unsigned();

            $table->integer('harga');
            $table->string('keterangan');
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('price_lists', function (Blueprint $table) {
            $table->foreign('id_product')
            ->references('id')->on('products')
            ->onDelete('cascade');

            $table->foreign('id_provider')
            ->references('id')->on('providers')
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
        Schema::dropIfExists('price_lists');
    }
}
