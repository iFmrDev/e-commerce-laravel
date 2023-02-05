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
        
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('discription')->nullable();
            $table->float('price');
            $table->smallInteger('qty');
            $table->float('amount');
            $table->float('vat');
            $table->float('discount');
            $table->float('total');
            $table->boolean('status')->default(false);
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('invoice_items');
    }
};
