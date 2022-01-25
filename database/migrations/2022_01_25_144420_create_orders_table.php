<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('number', 11);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('client_id');
            $table->float('value',12,2)->nullable()->default(0);
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('user_id');
            $table->string('address', 150)->nullable();
            $table->unsignedBigInteger('payment_id');
            $table->boolean('archive')->nullable()->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->foreign('payment_id')->references('id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
