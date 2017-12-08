<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('from_id')->unsigned();
            $table->integer('to_id')->unsigned();
            $table->integer('amount');
            $table->timestamps();
            $table->foreign('from_id')->references('id')->on('wallets')->onDelete('cascade');
            $table->foreign('to_id')->references('id')->on('wallets')->onDelete('cascade');

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
