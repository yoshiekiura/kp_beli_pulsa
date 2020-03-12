<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_user')->unsigned();
            $table->string('komentar');
            $table->dateTime('buat_komentar');
            $table->timestamps();
        });

        Schema::table('testimonials', function (Blueprint $table) {
            // $table->foreign('id_harga')
            // ->references('id')->on('price_lists')
            // ->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')
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
        Schema::dropIfExists('testimonials');
    }
}
