<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calenders', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->date('date_start')->nullable()->default(new DateTime());
            $table->date('date_end')->nullable()->default(new DateTime());
            $table->boolean('archive')->nullable()->default(false);
            $table->boolean('important')->nullable()->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calenders');
    }
}
