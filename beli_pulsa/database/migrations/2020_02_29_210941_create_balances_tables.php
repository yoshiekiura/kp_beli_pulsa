<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalancesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balances_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bank');
            $table->dateTime('date');
            $table->string('type');
            $table->string('note');
            $table->bigInteger('amount');
            $table->bigInteger('balance');
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
        Schema::dropIfExists('balances_tables');
    }
}
