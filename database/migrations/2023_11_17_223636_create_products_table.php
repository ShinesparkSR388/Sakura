<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('code');
            $table->string('name');
            $table->string('editorial');
            $table->string('author');
            $table->integer('year');
            $table->string('category');
            $table->longText('image');
            $table->integer('stock');
            $table->longText('description');
            $table->float('price', 8,2)->default(0);
            $table->float('sell_price', 8,2)->default(0);
            $table->unsignedBigInteger('id_provider');
            $table->foreign('id_provider')->references('id')->on('providers')->onDelete('cascade');
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
};
