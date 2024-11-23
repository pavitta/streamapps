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
            $table->id();
            $table->bigInteger('shoppingcart_id')->unsigned()->index();
            $table->foreign('shoppingcart_id')->references('id')->on('shopping_carts')->onDelete('cascade');
            $table->dateTime('expire_time')->nullable();
            $table->dateTime('start_time')->nullable();
            $table->enum('status', [0, 1])->nullable()->default(1);
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
