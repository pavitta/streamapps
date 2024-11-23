<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categories_id')->unsigned()->index();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->longText('name');
            $table->bigInteger('price')->unsigned()->default(0);
            $table->longText('image');
            $table->integer('top_trending')->unsigned()->default(0);
            $table->integer('top_seller')->unsigned()->default(0);
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
        Schema::dropIfExists('products');
    }
}
