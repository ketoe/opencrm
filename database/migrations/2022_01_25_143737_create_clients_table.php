<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->unsignedBigInteger('nip')->nullable();
            $table->unsignedBigInteger('regon')->nullable();
            $table->unsignedBigInteger('krs')->nullable();
            $table->string('address', 150)->nullable();
            $table->unsignedBigInteger('telephone')->nullable();
            $table->string('email', 100)->nullable();
            $table->unsignedBigInteger('countrie_id');
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('payment_id');
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
        Schema::dropIfExists('clients');
    }
}
